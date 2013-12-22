<?php

class UserController extends \BaseController {

	public function login()
	{
		return View::make('user.login');
	}

	public function logout()
	{
		Auth::logout();

		return Redirect::route('home');
	}

	public function signIn()
    {
        $postData = Input::all();
        
        $rules = array(
        'mail' => 'required|email',
        'password' => 'required'
        );
        
        $messages = array(
        'mail.required' => 'Lütfen mail adresinizi yazın',
        'mail.email' => 'Lütfen geçerli bir mail adresi yazın',
        'password.required' => 'Lütfen şfirenizi yazın',
        );
        
        $validator = Validator::make($postData, $rules, $messages);
        
        if ($validator->fails()) {
            
            return Redirect::route('login')
                        ->withInput()
                        ->withErrors($validator->messages());
            
        }
        
        if ( ! Auth::attempt(array('email' => $postData['mail'], 'password' => $postData['password'])) ) {
            
            return Redirect::route('login')->withInput()->withErrors(array('Girdiğiniz kullanıcı bilgileri geçerli değil'));
            
        }
        
        return Redirect::route('home');
    }
    
    public function signUp()
    {
        $postData = Input::all();
        
        $rules = array(
        'fullname' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:4|confirmed',
        'password_confirmation' =>'required'
        );
        
        $messages = array(
        'fullname.required' => 'Lütfen adınızı ve soyadınızı yazın',
        'email.required' => 'Lütfen mail adresinizi yazın',
        'email.email' => 'Lütfen geçerli bir mail adresi yazın',
        'email.unique' => 'Bu mail adresi ile zaten daha önce kayıt olunmuş',
        'password.required' => 'Lütfen şfirenizi yazın',
        'password.min' => 'Lütfen şifrenizi minumum 4 karakterden oluşacak şekilde belirleyin',
        'password.confirmed' => 'Girdiğiniz şifreler birbiriyle uyuşmuyor',
        'password_confirmation.required' => 'Lütfen şifrenizi yeniden yazarak doğrulayın',
        );
        
        $validator = Validator::make($postData, $rules, $messages);
        
        if ($validator->fails()) {
            
            return Redirect::route('login')
                        ->withInput()
                        ->withErrors($validator->messages());
            
        }

        $user = User::create(array(
        'fullname' => $postData['fullname'],
        'email' => $postData['email'],
        'password' => Hash::make($postData['password'])
        ));
        
        Auth::login($user);
        
        return Redirect::route('home');
    }

}