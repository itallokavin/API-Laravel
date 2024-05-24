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
        Schema::create('telefone_cliente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->string('numero_telefone');
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
        });

        DB::table('telefone_cliente')->insert([
            'cliente_id' => 1,
            'numero_telefone' => '11111111111',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('telefone_cliente')->insert([
            'cliente_id' => 2,
            'numero_telefone' => '22222222222',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('telefone_cliente')->insert([
            'cliente_id' => 3,
            'numero_telefone' => '3333333333',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('telefone_cliente')->insert([
            'cliente_id' => 4,
            'numero_telefone' => '44444444444',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('telefone_cliente')->insert([
            'cliente_id' => 5,
            'numero_telefone' => '55555555555',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('telefone_cliente')->insert([
            'cliente_id' => 6,
            'numero_telefone' => '66666666666',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('telefone_cliente')->insert([
            'cliente_id' => 7,
            'numero_telefone' => '77777777777',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('telefone_cliente')->insert([
            'cliente_id' => 8,
            'numero_telefone' => '88888888888',
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
