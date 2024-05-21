<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartaoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TelefoneController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UsuarioController::class, 'index']);           
Route::get('/users/{id}', [UsuarioController::class, 'show']);       
Route::post('/users', [UsuarioController::class, 'store']);          
Route::patch('/users/{id}', [UsuarioController::class,'update']);    
Route::delete('/users/{id}', [UsuarioController::class,'destroy']);  

Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/clientes/{id}', [ClienteController::class, 'show']);
Route::post('/clientes', [ClienteController::class, 'store']);
Route::patch('/clientes/{id}', [ClienteController::class, 'update']);
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);

Route::get('/cartao', [CartaoController::class, 'index']);
Route::get('/cartao/{id}', [CartaoController::class, 'show']);
Route::post('/cartao', [CartaoController::class, 'store']);
Route::patch('/cartao/{id}', [CartaoController::class, 'update']);
Route::delete('/cartao/{id}', [CartaoController::class, 'destroy']);

Route::get('/telefones', [TelefoneController::class, 'index']);
Route::get('/telefones/{id}', [TelefoneController::class, 'show']);
Route::post('/telefones', [TelefoneController::class, 'store']);
Route::patch('/telefones/{id}', [TelefoneController::class, 'update']);
Route::delete('/telefones/{id}', [TelefoneController::class, 'destroy']);

Route::get('/enderecos', [EnderecoController::class, 'index']);
Route::get('/enderecos/{id}', [EnderecoController::class, 'show']);
Route::post('/enderecos', [EnderecoController::class, 'store']);
Route::patch('/enderecos/{id}', [EnderecoController::class, 'update']);
Route::delete('/enderecos/{id}', [EnderecoController::class, 'destroy']);

Route::post('/login', [AuthController::class, 'authenticate']);