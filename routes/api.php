<?php

use App\Jobs\CompanyCreated;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => response()->json(['message' => 'success']));

Route::get('teste', function () {
    CompanyCreated::dispatch('teste2@email.com')->onQueue('queue_email');

    return response()->json(['message' => 'success']);
});
