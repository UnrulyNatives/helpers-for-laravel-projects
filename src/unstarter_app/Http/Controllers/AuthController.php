<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;
use Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;


    protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */



    public function redirectToProvider($provider)
    {

        if(in_array($provider, ['facebook','google','twitter'])) {
            return Socialite::driver($provider)->redirect();
        } else {
            return 'No such social oAuth provider!';
        }


    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {


        // http://goodheads.io/2015/08/24/using-facebook-authentication-for-login-in-laravel-5/
        // http://stackoverflow.com/questions/35902318/testing-a-facebook-login-flow-with-laravel-5-1

        if(in_array($provider, ['facebook','google'])) {
            try {
                $user = Socialite::driver($provider)->user();
            } catch (Exception $e) {
                return redirect('login/'.$provider);
            }

            $authUser = User::where('email', '=', $user->email)->first();
            if ($authUser === NULL) {
                $authUser = User::create([
                    'email' => $user->email,
                    'name' => $user->name
                ]);
            }
            Auth::login($authUser, true);

            return redirect('dashboard');

        }
        if(in_array($provider, ['twitter'])) {

            try {
                $user = Socialite::driver('twitter')->user();
            } catch (Exception $e) {
                return redirect('login/twitter');
            }

            $authUser = $this->findOrCreateUser($user);

            Auth::login($authUser, true);

            return redirect()->route('dashboard');

        }

    }



    private function findOrCreateUser($twitterUser)
    {
        $authUser = User::where('twitter_id', $twitterUser->id)->first();

        if ($authUser){
            return $authUser;
        }

        return User::create([
            // 'name' => $twitterUser->name,
            'twitter_screen_name' => $twitterUser->nickname,
            'twitter_id' => $twitterUser->id,
            'avatar' => $twitterUser->avatar_original
        ]);
    }





   // private function findOrCreateUser($facebookUser)
   //  {
   //      // $authUser = User::where('facebook_id', $facebookUser->id)->first();
   //      $authUser = User::where('email', $facebookUser->email)->first();

   //      if ($authUser){
   //          return $authUser;
   //      }

   //      return User::create([
   //          'name' => $facebookUser->name,
   //          'email' => $facebookUser->email,
   //          'facebook_id' => $facebookUser->id,
   //          'avatar' => $facebookUser->avatar
   //      ]);
   //  }



    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
