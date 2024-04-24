<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menu_accesses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menus_id')->constrained('menuses');
            $table->foreignId('roles_id')->nullable()->constrained('roles');
            $table->foreignId('company_id')->nullable()->constrained('companies');
            $table->foreignId('user_id')->nullable()->constrained('users');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            // Optional: Add a unique constraint to prevent duplicate entries
            $table->unique(['menus_id', 'roles_id', 'company_id', 'user_id'], 'menu_access_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_accesses');
    }
};
