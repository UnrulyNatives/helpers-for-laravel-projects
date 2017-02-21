<?php

namespace App\Http\Controllers\UNStarter;

use DB;
use Session;
use Redirect;
use Cookie;
use View;
use HTML;
use Auth;
use Input;
use Image;
use Response;
use Theme;
use Illuminate\Cookie\CookieJar;

use App\User;
use App\Models\Changelog;
use App\Models\Communique;
use App\Models\Communiquetype;
use App\Models\Electoralcandidate;
use App\Models\Related;
use App\Models\Role;
use App\Models\Sitestat;
use App\Models\Usersetting;
use App\Models\UserWorkspace;

use Lanz\Commentable\Comment;
use Sunra\PhpSimple\HtmlDomParser;

use App\Http\Controllers\Controller;

class ModeratorToolsPartialsController extends Controller
{

    public function __construct() {
        $this->middleware('moderators');

        // $this->middleware('admins', ['only' => array('recalc_party_membership')]);

    }

    public function index() {

        //


    }



public function change_participants_status_value($itemkind,$itemid,$newval='1') {


    if($itemkind == 'events') {
        $newstatus = Event::find($itemid);
        $newstatus->participants_status = $newval;
        $newstatus->save();

    }

    return "status zmieniony na ".$newval;
}

public function change_field_value($itemkind,$field,$itemid,$newval='1') {



    $date = new \DateTime;

   $itemtype = str_singular($itemkind);
    $class_name = ucfirst($itemtype);
    $name = "App\\Models\\" . $class_name;
    $class = new $name;

    if (class_exists($name) && get_parent_class($class) == 'Illuminate\Database\Eloquent\Model') {

        $object = $class->find($itemid);
        $object->$field = $newval;

        if(Auth::check()) {
            $object->acknowledger_id = Auth::id();
        }
        $object->acknowledged_at = $date;


        $object->save();
        return "Done! ".$newval;
        return "Pole ".$field." zmienione na ".$newval;

    } else {
         return "Needs more developing. See BB #675";
    }



}



public function detach_models($itemkind, $item1, $attachedkind, $item2) {



        $itemtype = str_singular($itemkind);

        //getting Class name
        $class_name = ucfirst($itemtype);
        $name = "App\\Models\\" . $class_name;
        $class = new $name;

        
        if (class_exists($name) && get_parent_class($class) == 'Illuminate\Database\Eloquent\Model') {
            $object = $class->find($item1);
        }


                $item_to_attach = (array)$item2;
                $object->$attachedkind()->detach($item_to_attach);



    // $object = Electoralcandidate::where('electoraldistrict_id', $district)->delete();
    

    return "Detached!";
}

public function attach_models($itemkind, $item1, $attachedkind, $item2) {



        $itemtype = str_singular($itemkind);

        //getting Class name
        $class_name = ucfirst($itemtype);
        $name = "App\\Models\\" . $class_name;
        $class = new $name;

        
        if (class_exists($name) && get_parent_class($class) == 'Illuminate\Database\Eloquent\Model') {
            $object = $class->find($item1);
        }


                $item_to_attach = (array)$item2;
                $object->$attachedkind()->sync($item_to_attach, false);
                $object->$attachedkind()->updateExistingPivot($item2, array('creator_id' => Auth::id(),'updater_id' => Auth::id()), false);



    // $object = Electoralcandidate::where('electoraldistrict_id', $district)->delete();
    

    return "Attached!";
}



}
