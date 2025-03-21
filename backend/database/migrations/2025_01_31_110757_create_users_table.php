<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number')->nullable(); // Додає можливість зберігати NULL
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('role')->default('user'); // Роль за замовчуванням
            $table->timestamps(); // Створює поля created_at та updated_at
            $table->softDeletes(); // Додає поле deleted_at для soft delete
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken(); // Додає поле remember_token


        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
