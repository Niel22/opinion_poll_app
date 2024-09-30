<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\HomePage;
use App\Livewire\Polls\Create;
use App\Livewire\Polls\View;
use App\Livewire\User\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');
Route::get('poll/create', Create::class)->name('poll.create');
Route::get('poll/view', View::class)->name('poll.view');

// User
Route::get('profile', Profile::class)->name('profile');

// Auth
Route::get('login', Login::class)->name('login');
Route::get('register', Register::class)->name('register');
