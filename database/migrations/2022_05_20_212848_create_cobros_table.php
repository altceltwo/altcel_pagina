<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCobrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobros', function (Blueprint $table) {
            $table->id();
            $table->string('datetime', 19)->nullable();
            $table->integer('transnumber')->length(11)->nullable();
            $table->string('phonenumber', 10)->nullable();
            $table->double('qty')->nullable();
            $table->integer('autono')->length(11)->nullable();
            $table->integer('responsecode')->length(11)->nullable();
            $table->string('descriptioncode',80)->nullable();
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
        Schema::dropIfExists('cobros');
    }
}
