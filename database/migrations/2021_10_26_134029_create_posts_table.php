<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            /*column: */
            $table->id();
            $table->string('publication')->nullable()->default('text');
            $table->enum('state_publication', ['Publicado', 'Rechazado', 'En revisión'])->nullable()->default('En revisión');
            $table->text('content_publication')->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
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
        Schema::dropIfExists('posts');
    }
}
