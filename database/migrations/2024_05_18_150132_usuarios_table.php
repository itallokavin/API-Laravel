<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('usuario')->unique();
            $table->string('senha');
            $table->string('email')->unique();
            $table->timestamps();
        });

        // Inserir um usuário padrão
        DB::table('usuarios')->insert([
            'nome' => 'Administrador',
            'usuario' => 'admin',
            'senha' => Hash::make('admin123'), // Use Hash::make para consistência, 
            'email' => 'admin@gmail.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
