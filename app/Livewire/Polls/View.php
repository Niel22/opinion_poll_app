<?php

namespace App\Livewire\Polls;

use Livewire\Component;

class View extends Component
{
    public $pageTitle = 'View Poll Result';

    public function render()
    {
        return view('livewire.polls.view');
    }
}
