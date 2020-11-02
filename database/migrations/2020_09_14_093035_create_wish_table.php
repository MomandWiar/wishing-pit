<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wish', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naam');
            $table->text('beschrijving');
            $table->string('plaatje');
            $table->string('link');
            $table->string('prijs');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wish');
    }
}
