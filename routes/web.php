<?php

use App\Livewire\Admin\Polls as AdminPolls;
use App\Livewire\Admin\Users;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\HomePage;
use App\Livewire\Polls\Create;
use App\Livewire\Polls\View;
use App\Livewire\User\Polls;
use App\Livewire\User\Profile;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function() {

    Route::get('/', HomePage::class)->name('home');
    Route::get('poll/create', Create::class)->name('poll.create');
    Route::get('poll/{id}', View::class)->name('poll.view');

    // User
    Route::get('user/profile', Profile::class)->name('profile');
    Route::get('user/polls', Polls::class)->name('polls');

    // Admin
    Route::group([], function(){
        Route::get('admin/all-polls', AdminPolls::class)->name('admin.polls');
        Route::get('admin/all-users', Users::class)->name('admin.users');
    });

    
});

// Auth
Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');
    Route::get('register', Register::class)->name('register');
});
