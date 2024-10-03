<?php

namespace App\Livewire\User;

use App\Models\Notification as ModelsNotification;
use Livewire\Component;

class Notification extends Component
{
    public function render()
    {
        return view('livewire.user.notification', [
            'notifications' => ModelsNotification::all()
        ]);
    }
}
