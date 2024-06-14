<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actedeces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('citoyens_id')->constrained('citoyens')->onDelete('cascade');
            $table->foreignId('services_id')->constrained('services')->onDelete('cascade');
            $table->string('nomdece');
            $table->string('prenomdece');
            $table->date('datedece');
            $table->string('lieu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actedeces');
    }
};
