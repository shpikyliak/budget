<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserColumnToBudgetsMessagesArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->integer('user_id');

        });
        Schema::table('budgets', function (Blueprint $table) {
            $table->integer('user_id');

        });
        Schema::table('articles', function (Blueprint $table) {
            $table->integer('user_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->dropColumn('user_id');

        });
        Schema::table('budgets', function (Blueprint $table) {
            $table->dropColumn('user_id');

        });
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('user_id');

        });   //
    }
}
