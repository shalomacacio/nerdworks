<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Validators\UserValidator;
use App\Repositories\UserRepository;

use Auth;

class AuthenticateController extends Controller
{
    protected $repository;
    protected $validator;

    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function login(){
        return view('auth.login');
    }

    public function register(){
      return view('auth.login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('vacancies.index');
    }

    public function auth(Request $request)
    {
        $data = [
            'email'=> $request->get('email'),
            'password' => $request->get('password')
        ];

        try
          {
            if(env('PASSWORD_HASH')){
                Auth::attempt($data, false);
          }else{
                $user = $this->repository->findWhere(['email'=>$request->get('email') ])->first();

                if(!$user){
                    throw new Exception("Email inválido");
                }

                if($user->password != $request->get('password')){
                    throw new Exception("Senha inválida");
                }

                Auth::login($user);
                return redirect()->route('vacancies.create');
          }
        } catch(\Throwable $th){
          //throw $th;
          echo ('erro');
          return dd($th);
        }
    }

}
