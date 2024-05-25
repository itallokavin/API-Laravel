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
        Schema::create('cartao_cliente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->string('numero_cartao')->unique();
            $table->string('validade_cartao');
            $table->string('cvv_cartao');
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
        });

        DB::table('cartao_cliente')->insert([
            'cliente_id' => 1,
            'numero_cartao' => '1111111111111111',
            'validade_cartao' => '04/2025',
            'cvv_cartao' => '123',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('cartao_cliente')->insert([
            'cliente_id' => 2,
            'numero_cartao' => '2222222222222222',
            'validade_cartao' => '05/2025',
            'cvv_cartao' => '234',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('cartao_cliente')->insert([
            'cliente_id' => 3,
            'numero_cartao' => '3333333333333333',
            'validade_cartao' => '06/2025',
            'cvv_cartao' => '345',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('cartao_cliente')->insert([
            'cliente_id' => 4,
            'numero_cartao' => '4444444444444444',
            'validade_cartao' => '07/2025',
            'cvv_cartao' => '456',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('cartao_cliente')->insert([
            'cliente_id' => 5,
            'numero_cartao' => '5555555555555555',
            'validade_cartao' => '08/2025',
            'cvv_cartao' => '567',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('cartao_cliente')->insert([
            'cliente_id' => 6,
            'numero_cartao' => '6666666666666666',
            'validade_cartao' => '09/2025',
            'cvv_cartao' => '678',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('cartao_cliente')->insert([
            'cliente_id' => 7,
            'numero_cartao' => '7777777777777777',
            'validade_cartao' => '10/2025',
            'cvv_cartao' => '789',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('cartao_cliente')->insert([
            'cliente_id' => 8,
            'numero_cartao' => '8888888888888888',
            'validade_cartao' => '11/2025',
            'cvv_cartao' => '890',
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
