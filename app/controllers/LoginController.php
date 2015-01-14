<?php
/**
 * Created by PhpStorm.
 * User: tunte
 * Date: 1/14/15
 * Time: 11:50 AM
 */
class LoginController extends BaseController {

    public function getLogin(){

        return View::make('login');

    }

    public function postLogin() {

        $validator = Validator::make(Input::all(), array(
            'username'=>'required|min:3',
            'password'=>'required|min:3'
        ));
        if($validator->fails()){

            return Redirect::route('login')
                ->withErrors($validator)
                ->withInput();

        }
        else {
            $remember = Input::has('remember') ? true : false;

            //echo '<pre>';print_r(Hash::make(Input::get('password')));die;

            $auth = Auth::attempt(array(
                'username'=>Input::get('username'),
                'password'=>Input::get('password')
            ), $remember);

            if($auth){
                //return Redirect::route('offers');
                return Redirect::intended('/');
            } else {
                return Redirect::route('login')
                    ->with('global','Погрешно корисничко име или лозинка');
            }

        }
    }

    public function getLogout(){

        Auth::logout();
        return Redirect::route('login');

    }

}