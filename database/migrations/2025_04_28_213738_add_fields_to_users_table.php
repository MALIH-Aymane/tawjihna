<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Add new fields
            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name');
            $table->string('tel')->nullable()->after('email');

            // Drop the old "name" field
            $table->dropColumn('name');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Rollback: remove added fields
            $table->dropColumn(['first_name', 'last_name', 'tel', 'role']);

            // Re-add the "name" field
            $table->string('name')->after('id');
        });
    }
}
