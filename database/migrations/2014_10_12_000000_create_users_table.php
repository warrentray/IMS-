<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('user_id',20);
            $table->string('email')->unique();
<<<<<<< HEAD
            $table->string('password',255);
=======
            $table->string('password',60);
>>>>>>> c3fb78ac8aec4aa7f4cebfec283cdc3d26e7417f
            $table->string('name',255);
            $table->ipAddress('IP_address');
            $table->string('address',255);
            $table->string('phone',20);
            $table->string('role',10);
            $table->char('user_type',1);
            $table->string('recovery_email',30);
            $table->dateTime('registration_time');            
            $table->timestamps();

            $table->primary('user_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
