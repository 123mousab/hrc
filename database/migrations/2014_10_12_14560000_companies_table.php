<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->string('company_name')->nullable();
            $table->string('company_email')->unique()->nullable();
            $table->string('company_phone')->unique()->nullable();
            $table->string('website')->nullable();
            $table->string('address')->nullable();
            $table->unsignedBigInteger('currency_id')->nullable();
            $table->timeTz('timezone')->nullable();
            $table->string('locale')->nullable();
            $table->string('date_format')->nullable();
            $table->string('time_format')->nullable();
            $table->integer('week_start')->nullable();
            $table->decimal('longitude')->nullable();
            $table->decimal('latitude')->nullable();
            $table->boolean('status')->default(0);

            $table->dateTime('trial_ends_at')->nullable();
            $table->dateTime('licence_expire_on')->nullable();
            $table->dateTime('last_login')->nullable();
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
        Schema::dropIfExists('password_resets');
    }
}
