<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $pageTitle = "All Users";

    public function delete($id)
    {
        $user = User::find($id);

        if ($user->role == 'admin') {
            toastr()->error("Admin Cannot be deleted");
        } else {
            $user->delete();

            toastr()->success("User Deleted");
        }
    }

    public function render()
    {
        return view('livewire.admin.users', [
            'users' => User::all()
        ]);
    }
}
