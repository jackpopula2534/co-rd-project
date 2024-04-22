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
        Schema::create('menuses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('icon')->nullable();
            $table->string('link');
            $table->string('permission');  // e.g., 'admin', 'user', 'ceo'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menuses');
    }
};