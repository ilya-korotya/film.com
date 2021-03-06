<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('year');
            // $table->unique(['title', 'year'], 'id_film'); ???
            $table->string('rated')->nullable();
            $table->date('released')->nullable();
            $table->integer('runtime')->nullable();
            // Сделать возможность жанров. Только через связные таблицы. Как то потом
            // Так же возможность актоеров через связные списки
            $table->text('plot')->nullable();
            $table->string('director')->nullable();
            $table->string('awards')->nullable();
            $table->string('poster')->nullable();
            $table->double('imdbrating', 4, 2)->nullable(); // всего 4 цифры, 2-ве после
            $table->json('ratings')->nullable();
            $table->string('imdbid')->nullable();
            $table->string('poster_color')->nullable();
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
        Schema::dropIfExists('films');
    }
}
