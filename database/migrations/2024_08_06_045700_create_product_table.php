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
        Schema::create('product', function (Blueprint $table) {
            $table->id("product_id");
            $table->string("product_name", 100);
            $table->decimal("price",8,2);
            // $table->foreignId('function_id')->constrained(
            //     table: 'functionality',
            //     indexName: 'product_function_id_foreign'
            // );
            // $table->foreignId('weapontype_id')->constrained(
            //     table: 'weapontype',
            //     indexName: 'product_weapontype_id_foreign'
            // );
            $table->unsignedBigInteger("function_id");
            $table->unsignedBigInteger("weapontype_id");
            $table->timestamps();

            $table->foreign("function_id")->references("function_id")->on("functionality")->onDelete("cascade");
            $table->foreign("weapontype_id")->references("weapontype_id")->on("weapontype")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
