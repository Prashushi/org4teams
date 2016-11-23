<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditFieldsInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->dropColumn('name');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('date_of_birth');
            $table->boolean('newsletter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->dropColumn([ 'firstname', 'lastname', 'date_of_birth', 'newsletter']);
            $table->string('name');
        });
    }
}
