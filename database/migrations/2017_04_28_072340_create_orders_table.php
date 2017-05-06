<?php
namespace database\migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('User_id')->unsigned();
            $table->string('Username');
            $table->string('Email');
            $table->integer('Mobile')->unsigned();
            $table->text('Address_ship');
            $table->text('Request');
            $table->float('Total');
            $table->integer('Payment_id')->unsigned();
            $table->integer('Deliver_id')->unsigned();
            $table->integer('Id_sub')->unsigned();
            $table->integer('Status')->unsigned();
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
        Schema::dropIfExists('orders');
    }
}
