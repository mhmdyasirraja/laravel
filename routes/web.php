<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

route::get('/', [HomeController::class, 'index']);
route::get('contact', [HomeController::class, 'contact']);
route::get('/about', [HomeController::class, 'about']);
route::get('/produk', [HomeController::class, 'produk']);