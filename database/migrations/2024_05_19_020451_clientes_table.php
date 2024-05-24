<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('email')->unique();
            $table->date('data_nascimento');
            $table->timestamps();
        });

        DB::table('clientes')->insert([
            'nome' => 'Primeiro',
            'sobrenome' => 'Cliente',
            'email' => 'primeiro@gmail.com',
            'data_nascimento' => '01-01-2000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clientes')->insert([
            'nome' => 'Segundo',
            'sobrenome' => 'Cliente',
            'email' => 'segundo@gmail.com',
            'data_nascimento' => '01-02-2000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clientes')->insert([
            'nome' => 'Terceiro',
            'sobrenome' => 'Cliente',
            'email' => 'terceiro@gmail.com',
            'data_nascimento' => '01-03-2000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clientes')->insert([
            'nome' => 'Quarto',
            'sobrenome' => 'Cliente',
            'email' => 'quarto@gmail.com',
            'data_nascimento' => '01-04-2000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clientes')->insert([
            'nome' => 'Quinto',
            'sobrenome' => 'Cliente',
            'email' => 'quinto@gmail.com',
            'data_nascimento' => '01-05-2000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clientes')->insert([
            'nome' => 'Sexto',
            'sobrenome' => 'Cliente',
            'email' => 'sexto@gmail.com',
            'data_nascimento' => '01-06-2000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clientes')->insert([
            'nome' => 'Sétimo',
            'sobrenome' => 'Cliente',
            'email' => 'setimo@gmail.com',
            'data_nascimento' => '01-07-2000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clientes')->insert([
            'nome' => 'Oitavo',
            'sobrenome' => 'Cliente',
            'email' => 'oitavo@gmail.com',
            'data_nascimento' => '01-08-2000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
