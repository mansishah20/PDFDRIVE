<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_masters', function (Blueprint $table) {
			$table->bigIncrements('id');  
			$table->string('uname');
			$table->string('uemail');  
			$table->string('upassword');
			$table->string('utype');  
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
        Schema::dropIfExists('user_masters');
    }
}
