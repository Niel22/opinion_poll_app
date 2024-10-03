<?php

namespace App\Livewire\Auth;

use App\Models\Department;
use App\Models\Faculty;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $faculty_id = '';
    public $departments;

    public $name, $email, $password, $password_confirmation, $role, $department_id;

    protected $rules = [
        'name' => ['required', 'string', 'min:8'],
        'email' => ['required', 'email', 'unique:users,email'],
        'password' => ['required', 'string','min:8', 'max:255', 'confirmed'],
        'role' => ['required', 'string'],
        'faculty_id' => ['required', 'string'],
        'department_id' => ['required', 'string'],
    ];

    public function register(){
        $user = $this->validate();

        $newUser = User::create($user);

        Auth::login($newUser);

        toastr()->success("You have been successfully registered");

        $this->redirectIntended('/');
    }

    public function render()
    {
        if($this->faculty_id != '') {
            $this->departments = Department::where('faculty_id', $this->faculty_id)->get();
        }

        return view('livewire.auth.register', [
            'faculties'=> Faculty::all(),
        ])->layout('components.layouts.auth');;
    }
}
