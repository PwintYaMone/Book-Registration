<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_registers', function (Blueprint $table) {
             $table->id();
             $table->String('fname');
             $table->String('lname');
            $table->Integer('phone');           
            $table->String('email');
            $table->String('address');
            $table->BigInteger('bid');
            $table->String('bname');
            $table->String('author');
            $table->String('btype');
            $table->String('sdate');
            $table->String('ddate');

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
        Schema::dropIfExists('book_registers');
    }
}
