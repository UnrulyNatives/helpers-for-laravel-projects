<?php 

namespace UnrulyNatives\Helpers;
 
use Auth;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
 
class HelpersController extends Controller
{
 
    // public function index($timezone)
    // {
    //     echo Carbon::now($timezone)->toDateTimeString();
    // }


    public function index($timezone = NULL)
    {

        echo Carbon::now($timezone)->toDateTimeString();
        
       //  $current_time = ($timezone)
       //      ? Carbon::now(str_replace('-', '/', $timezone))
       //      : Carbon::now();
       //  // echo $time->toDateTimeString();

       // return view('timezones::time', compact('current_time'));

    }


    public function gravatar()
    {


        return Auth::user()->gravatar();


    }

    public function docs()
    {


        return "The Unrulynatives/Helpers package is working!";


    }


}