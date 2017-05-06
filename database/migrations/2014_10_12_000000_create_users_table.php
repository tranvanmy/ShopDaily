<?php
namespace database\migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('Full_name');
            $table->string('Auth_key');
            $table->string('email');
            $table->string('password');
            $table->integer('Phone')->unsigned();
            $table->string('Address');
            $table->integer('Level')->unsigned();
            $table->integer('Status')->unsigned();
            $table->string('Striper_id');
            $table->string('Card_brand');
            $table->string('Card_last_four');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
