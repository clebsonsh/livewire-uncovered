<?php

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Blade::directive('livewire', function ($expression) {
    return "<?= app('App\Livewire')->initialRender($expression); ?>";
});
