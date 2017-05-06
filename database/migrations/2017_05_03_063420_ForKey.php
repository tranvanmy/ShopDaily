<?php
namespace database\migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('Cate_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('Factory_id')->references('id')->on('factories')->onDelete('cascade');
            $table->foreign('Size_id')->references('id')->on('sizes')->onDelete('cascade');
            $table->foreign('Color_id')->references('id')->on('colors')->onDelete('cascade');
        });

        Schema::table('categories', function (Blueprint $table) {
            $table->foreign('Banner_id')->references('id')->on('banners')->onDelete('cascade');
        });

        Schema::table('order_details', function (Blueprint $table) {
            $table->foreign('Product_id')->references('id')->on('products')->onDelete('cascade');
             $table->foreign('Order_id')->references('id')->on('orders')->onDelete('cascade');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('Payment_id')->references('id')->on('payments')->onDelete('cascade');
            $table->foreign('Deliver_id')->references('id')->on('delivers')->onDelete('cascade');
            $table->foreign('Id_sub')->references('id')->on('subscriptions')->onDelete('cascade');
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('wishlists', function (Blueprint $table) {
            $table->foreign('Product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('subscriptions', function (Blueprint $table) {
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('Product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('Like_id')->references('id')->on('likes')->onDelete('cascade');
        });

        Schema::table('likes', function (Blueprint $table) {
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
        });
        
        Schema::table('ranks', function (Blueprint $table) {
            $table->foreign('Product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
