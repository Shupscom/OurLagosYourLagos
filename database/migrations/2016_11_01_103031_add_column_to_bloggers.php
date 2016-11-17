<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToBloggers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Bloggers', function (Blueprint $table) {
            $table->string('fullname');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('picture');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Bloggers', function (Blueprint $table) {
            $table->dropColumn('fullname');
            $table->dropColumn('email');
            $table->dropColumn('username');
            $table->dropColumn('password');
            $table->dropColumn('picture');
        });
    }
}
