<?php

use App\Livewire\HomePage;
use App\Livewire\Polls\Create;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');
Route::get('poll/create', Create::class)->name('poll.create');
