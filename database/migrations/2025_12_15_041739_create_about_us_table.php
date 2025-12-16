<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('about_us', function (Blueprint $table) {
        $table->id();
        $table->text('story');
        $table->string('instagram')->nullable();
        $table->string('whatsapp')->nullable(); // NOMOR WA
        $table->text('maps_embed')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
