<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number');
            $table->string('name')->unique();
            $table->string('adresse');
            $table->string('origin');
            $table->string('product_1');
            $table->integer('quantity_1');
            $table->string('tissu_1');
            $table->string('product_2')->nullable();
            $table->integer('quantity_2')->nullable();
            $table->string('tissu_2')->nullable();
            $table->string('product_3')->nullable();
            $table->integer('quantity_3')->nullable();
            $table->string('tissu_3')->nullable();
            $table->integer('statut')->default(1);
            $table->integer('total')->default(0);
            $table->integer('temps_prod')->default(0);
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
        Schema::dropIfExists('commands');
    }
}
