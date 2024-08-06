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
        Schema::create('weapontype', function (Blueprint $table) {
            $table->id("weapontype_id");
            $table->string("weapontype_name", 20);
            $table->unsignedBigInteger("weapon_id");
            // $table->foreignId('weapon_id')->constrained(
            //     table: 'weapon',
            //     indexName: 'weapontype_weapon_id_foreign'
            // );
            $table->timestamps();
            $table->foreign("weapon_id")->references("weapon_id")->on("weapon")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weapontype');
    }
};
