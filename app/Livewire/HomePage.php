<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public $pageTitle = "Available Polls For You";
    
    public function render()
    {
        return view('livewire.home-page');
    }
}
