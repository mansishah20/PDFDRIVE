<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('bname');  
			$table->string('bauthor');
			$table->integer('bpage');  
			$table->string('bsize');
			$table->string('bcover');  
            $table->string('bpdf'); 
            $table->string('blanguage');
            $table->string('bdescribe');
			$table->date('bpubdate');  
            $table->integer('catid');
            
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
        Schema::dropIfExists('books');
    }
}
