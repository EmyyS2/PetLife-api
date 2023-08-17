<?php

use App\Http\Controllers\ClientesController;
use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('cadastro/cliente', [ClientesController::class, 'cliente']);