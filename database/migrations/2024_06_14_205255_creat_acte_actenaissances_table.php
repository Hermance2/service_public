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
    Schema::create('actenaissances', function (Blueprint $table) {
        $table->id();
        $table->foreignId('citoyens_id')->constrained('citoyens')->onDelete('cascade');
        $table->foreignId('services_id')->constrained('services')->onDelete('cascade');
        $table->string('nomdemandeur');
        $table->string('prenomdemandeur');
        $table->date('datenaissance');
        $table->string('lieunaissance');
        $table->string('mere');
        $table->string('pere');
        $table->string('motif');
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
        Schema::dropIfExists('actenaissances');
    }
};
