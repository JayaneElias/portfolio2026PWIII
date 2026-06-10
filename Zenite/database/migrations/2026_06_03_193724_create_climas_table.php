<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('climas', function (Blueprint $table) {
        $table->id();

        $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');

        $table->date('data_registro');
        $table->string('regiao');
        $table->string('relato');

        $table->timestamps();
    });
}
};
