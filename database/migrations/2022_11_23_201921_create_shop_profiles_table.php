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
        Schema::create('shop_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('major');
            $table->unsignedBigInteger('users_id');
            $table->text('desc');
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shop_profiles', function (Blueprint $table) {
            $table->dropForeign(['users_id']);
        });
        Schema::dropIfExists('shop_profiles');
    }
};
