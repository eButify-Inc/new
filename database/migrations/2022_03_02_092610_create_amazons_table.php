<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmazonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amazons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title', 500);
            $table->decimal('price',$precision = 8, $scale = 2);
            $table->bigInteger('review');
            $table->decimal('rating',$precision = 8, $scale = 1);
            $table->string('ali_image', 500);
            $table->string('ali_link', 500);
            $table->string('amazon_link', 500);
            $table->boolean('is_approved')->default(false);
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('amazons');
    }
}
