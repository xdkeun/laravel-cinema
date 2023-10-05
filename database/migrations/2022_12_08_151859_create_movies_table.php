<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            
            $table->id();
			$table->integer('genre_id')->nullable();
			$table->string('title',40);
			$table->integer('director_id')->nullable();
			$table->string('actor',50);
			$table->tinyinteger('grade')->nullable();
            $table->string('pic',255)->nullable();
			$table->date('playdate')->nullable();
			$table->string('summary',255);
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
        Schema::dropIfExists('movies');
    }
};
