<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('stones', function(Blueprint $table){
            $table->foreignId('owner_id')->constrained();
        });
        Schema::table('category_stone', function (Blueprint $table){
            $table->foreignId('stone_id')->constrained();
            $table->foreignId('category_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stones', function(Blueprint $table){
            $table->dropColumn('owner_id');
        });
        Schema::table('category_stone', function(Blueprint $table){
            $table->dropColumn(['stone_id', 'category_id']);
        });
    }
};
