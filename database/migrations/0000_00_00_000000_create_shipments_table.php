<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.shipment.data.shipment.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid')->unique();
            $table->string('tracking_code')->unique()->nullable();
            $table->string('status')->nullable();
            $table->string('label')->nullable();

            $table->integer('sender_address_id')->unsigned();
            $table->foreign('sender_address_id')->references('id')->on(Config::get('amethyst.address.data.address.table'));

            $table->integer('recipient_address_id')->unsigned();
            $table->foreign('recipient_address_id')->references('id')->on(Config::get('amethyst.address.data.address.table'));

            $table->string('recipient_name');
            $table->string('recipient_phone')->nullable();
            $table->text('recipient_notes')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.shipment.data.shipment.table'));
    }
}
