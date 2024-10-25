<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
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
            $table->string('url')->nullable(); 
            $table->string('imdb_code')->unique(); 
            $table->string('title'); 
            $table->string('title_long')->nullable(); 
            $table->string('slug')->nullable(); 
            $table->year('year'); 
            $table->decimal('rating', 3, 1)->nullable(); 
            $table->integer('runtime')->nullable(); 
            $table->string('genres')->nullable(); 
            $table->text('summary')->nullable(); 
            $table->text('description')->nullable(); 
            $table->text('synopsis')->nullable(); 
            $table->string('language')->nullable(); 
            $table->string('background_image')->nullable(); 
            $table->date('date_uploaded')->nullable(); 
            $table->decimal('mpa_rating')->nullable(); 
            $table->boolean('is_edited')->default(false);
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
}
