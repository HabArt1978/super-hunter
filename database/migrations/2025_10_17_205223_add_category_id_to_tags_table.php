<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tags', function(Blueprint $table) {
            $table->foreignIdFor(Category::class)->constrained();
        });
    }

    public function down(): void
    {
        Schema::table('tags', function(Blueprint $table) {
            $table->dropForeignIdFor(Category::class);
        });
    }
};
