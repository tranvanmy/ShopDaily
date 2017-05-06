<?php
namespace database\migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Product_name');
            $table->string('Product_image');
            $table->integer('Cate_id')->unsigned();
            $table->integer('Factory_id')->unsigned();
            $table->float('Price');
            $table->float('SaleOff');
            $table->date('Start_sale');
            $table->date('End_sale');
            $table->integer('Size_id')->unsigned();
            $table->integer('Color_id')->unsigned();
            $table->text('Description');
            $table->text('Content');
            $table->integer('Point')->unsigned();
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
        Schema::dropIfExists('products');
    }
}
