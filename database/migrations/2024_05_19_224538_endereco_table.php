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
        Schema::create('endereco_cliente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep');
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
        });

        DB::table('endereco_cliente')->insert([
            'cliente_id' => 1,
            'logradouro' => 'Av. Getúlio Vargas',
            'numero' => '3648',
            'bairro' => 'Centro',
            'cidade' => 'Imperatriz',
            'estado' => 'MA',
            'cep' => '65901550',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('endereco_cliente')->insert([
            'cliente_id' => 2,
            'logradouro' => 'Av. Getúlio Vargas',
            'numero' => '3648',
            'bairro' => 'Centro',
            'cidade' => 'Imperatriz',
            'estado' => 'MA',
            'cep' => '65901550',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('endereco_cliente')->insert([
            'cliente_id' => 3,
            'logradouro' => 'Av. Getúlio Vargas',
            'numero' => '3648',
            'bairro' => 'Centro',
            'cidade' => 'Imperatriz',
            'estado' => 'MA',
            'cep' => '65901550',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('endereco_cliente')->insert([
            'cliente_id' => 4,
            'logradouro' => 'Av. Getúlio Vargas',
            'numero' => '3648',
            'bairro' => 'Centro',
            'cidade' => 'Imperatriz',
            'estado' => 'MA',
            'cep' => '65901550',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('endereco_cliente')->insert([
            'cliente_id' => 5,
            'logradouro' => 'Av. Getúlio Vargas',
            'numero' => '3648',
            'bairro' => 'Centro',
            'cidade' => 'Imperatriz',
            'estado' => 'MA',
            'cep' => '65901550',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('endereco_cliente')->insert([
            'cliente_id' => 6,
            'logradouro' => 'Av. Getúlio Vargas',
            'numero' => '3648',
            'bairro' => 'Centro',
            'cidade' => 'Imperatriz',
            'estado' => 'MA',
            'cep' => '65901550',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('endereco_cliente')->insert([
            'cliente_id' => 7,
            'logradouro' => 'Av. Getúlio Vargas',
            'numero' => '3648',
            'bairro' => 'Centro',
            'cidade' => 'Imperatriz',
            'estado' => 'MA',
            'cep' => '65901550',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('endereco_cliente')->insert([
            'cliente_id' => 8,
            'logradouro' => 'Av. Getúlio Vargas',
            'numero' => '3648',
            'bairro' => 'Centro',
            'cidade' => 'Imperatriz',
            'estado' => 'MA',
            'cep' => '65901550',
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
