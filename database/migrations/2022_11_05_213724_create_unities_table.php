<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration { //phpcs:ignore
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unities', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->timestamps();
        });

        //relacionamento com product_details
        Schema::table('product_details', function (Blueprint $table) {
            $table->unsignedBigInteger('unity_id')->after('id');
            $table->foreign('unity_id')->references('id')->on('unities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //remover relacionamento com product_details
        Schema::table('product_details', function (Blueprint $table) {
            //remove a fk
            $table->dropForeign('product_details_unity_id_foreign');

            //remove a coluna
            $table->dropColumn('unity_id');
        });

        Schema::dropIfExists('unities');
    }
};
