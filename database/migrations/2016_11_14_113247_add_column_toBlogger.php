<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToBlogger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Bloggers', function (Blueprint $table) {
            $table->boolean('confirmed')->default(0);
            $table->boolean('verified')->default(0);
            $table->string('confirmation_code')->nullable();

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
            $table->dropColumn('confirmed');
            $table->dropColumn('verified');
            $table->dropColumn('confirmation_code');
        });
    }
}
