<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::table('table_name', function (Blueprint $table) {
        //     $table->unsignedBigInteger('data1')->nullable(false);

        //     $table->foreign('data1')->references('id')->on('roles');
        // });

        Schema::table('sub_departments', function (Blueprint $table) {
            $table->string('department_id', 3)->nullable(false);

            $table->foreign('department_id')->references('department_id')->on('departments');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id')->nullable(false);
            $table->string('department_id',3)->nullable(false);

            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('department_id')->references('department_id')->on('departments');
        });

        Schema::table('user_sub_depts', function (Blueprint $table) {
            $table->string('nip')->nullable(false);
            $table->string('sub_department_id',6)->nullable(false);

            $table->foreign('nip')->references('nip')->on('users');
            $table->foreign('sub_department_id')->references('sub_department_id')->on('sub_departments');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('table_name', function (Blueprint $table) {
        //     $table->dropForeign(['data1']); 
        //     $table->dropColumn('data1'); 
        // });

        Schema::table('sub_departments', function (Blueprint $table) {
             $table->dropForeign(['department_id']); 
             $table->dropColumn('department_id'); 
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['department_id']); 
            $table->dropColumn('department_id');

            $table->dropForeign(['role_id']); 
            $table->dropColumn('role_id'); 
       });



    }
};
