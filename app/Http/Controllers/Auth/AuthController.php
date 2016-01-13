<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;
use Auth;
use Input;
use Redirect;

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

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

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

    //login

    public function getLogin(){
        $rules = array(
          'email'    => 'required|email',
          'password' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        $password = bcrypt(Input::get('password'));

        if($validator->fails()) {
            return Redirect::to('login')
                   ->withErrors($validator)
                   ->withInput(Input::except('password'));
        }else{
            $user = array(
              'email'   => Input::get('email'),
              'password' => bcrypt(Input::get('password'))
            );
            
            if(Auth::attempt($user)) {
              return Redirect::to('layouts');
            }else{   
              return Redirect::to('login');
            }
        }
    }

    public function postLogin(){
      return 'Halaman setelah login';
    }

    public function getRegister(){
      $user = new User();

      $user->name = Input::get('namalengkap');
      $user->gender = Input::get('gender');
      $user->thmasuk = Input::get('thmasuk');
      $user->thkeluar = Input::get('thkeluar');
      $user->tempatKerja = Input::get('tempatKerja');
      $user->reguler = Input::get('reguler');
      $user->foto = Input::get('foto');
      $user->email = Input::get('email');
      $user->password = bcrypt(Input::get('password'));

      $user->save();

      return Redirect::to('register')->with('pesan', 'Registrasi berhasil!');    
    }

    public function postRegister(){
      return 'b';
    }

    public function redirectToProvider(){
      return Socialite::driver('facebook')->redirect();
    }
    public function handleProviderCallback(){
      $user = Socialite::driver('facebook')->user();
      $data = ['name'=>$user->name,'email'=>$user->email, 'password'=>$user->token];
      $userDB = User::where('email',$user->email)->first();
      if(!is_null($userDB)){
        Auth::login($userDB);
      }
      else{
        Auth::login($this->create($data));
      }
      return redirect('/alumni');
    }

        // GOOGLE
    public function redirectToProvider2(){
      return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallback2(){
      $user = Socialite::driver('google')->user();
      $data = ['name'=>$user->name,'email'=>$user->email, 'password'=>$user->token];
      $userDB = User::where('email',$user->email)->first();
      if(!is_null($userDB)){
        Auth::login($userDB);
      }
      else{
        Auth::login($this->create($data));
      }
      return redirect('/alumni');
    }
    public function getLogout()
    {
        \Auth::logout();
        return redirect()->route('login')
            ->with('status', 'success')
            ->with('message', 'Logged out');
    }


}
