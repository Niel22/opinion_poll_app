<?php

namespace App\Livewire\User;

use Livewire\Component;

class Profile extends Component
{
    public $pageTitle = "User Profile";
    public function render()
    {
        return view('livewire.user.profile');
    }
}
