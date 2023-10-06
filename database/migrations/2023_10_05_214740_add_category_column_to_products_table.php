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
        Schema::table('products', function (Blueprint $table) {
            // add fk column
            $table->foreignId('category_id') ->nullable()
            ->constrained('categories')
            ->onUpdate('cascade')
            ->onDelete('cascade')
           ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->dropForeign('products_category_id_foreign');      
            $table->dropColumn('category_id');

        });
    }
};
