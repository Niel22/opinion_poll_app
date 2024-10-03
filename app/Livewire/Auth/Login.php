<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    protected $rules = [
        "email"=> ['required', 'email'],
        'password' => ['required','string'],
    ];

    public function login(){
        $user = $this->validate();

        if(Auth::attempt(['email' => $user['email'], 'password' => $user['password']])){
            session()->regenerate();

            toastr()->success('Welcome back');

            $this->redirectIntended('/');
        }else{
            $this->addError('email','Invalid password or email');
        }
    }
    public function render()
    {
        return view('livewire.auth.login')->layout('components.layouts.auth');
    }
}
