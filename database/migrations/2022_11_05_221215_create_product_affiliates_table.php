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
        Schema::create('product_affiliates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('affiliate_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('price')->nullable();
            $table->integer('min_iventory')->nullable();
            $table->integer('max_iventory')->nullable();
            $table->timestamps();
            $table->softDeletes();

            //foreign keys
            $table->foreign('affiliate_id')->references('id')->on('affiliates');
            $table->foreign('product_id')->references('id')->on('products');

            //removendo colunas de products
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn(['price', 'min_iventory', 'max_iventory']);
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //adicionar colunas à products
        Schema::table('products', function (Blueprint $table) {
            $table->integer('price')->nullable();
            $table->integer('min_iventory')->nullable();
            $table->integer('max_iventory')->nullable();
        });

        Schema::dropIfExists('product_affiliates');
    }
};
