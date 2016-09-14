<?php

namespace UnrulyNatives\Helpers;


// use Illuminate\Auth\Authenticatable;
// use Illuminate\Auth\Passwords\CanResetPassword;
// use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
// use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\Access\Authorizable;
// use App\Role;
// use Laraveldaily\Quickadmin\Observers\UserActionsObserver;
// use Laraveldaily\Quickadmin\Traits\AdminPermissionsTrait;
// use Spatie\Permission\Traits\HasRoles;

trait ModelExtensions  

{
    // use Authenticatable, Authorizable, CanResetPassword, AdminPermissionsTrait, HasRoles;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    // protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = ['name', 'email', 'password', 'role_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    // protected $hidden = ['password', 'remember_token'];

    public static function boot()
    {
        parent::boot();

        // User::observe(new UserActionsObserver);
    }



    // http://stackoverflow.com/questions/35163936/how-to-check-to-see-if-image-exists-else-display-something-else-laravel-5-2
    public function getAvatarpicAttribute($avatar){
        return is_null($this->avatar)?"img/no_avatar.jpg":$this->avatar;
    }






}

