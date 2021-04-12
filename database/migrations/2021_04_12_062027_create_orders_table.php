<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_review_code',45);
            $table->string('first_name',45);
            $table->string('last_name',45);
            $table->string('phone_number',15);
            $table->string('email',45);
            $table->string('service',80);
            $table->string('work_performed', 80);
            $table->string('company_name',100);
            $table->string('additional_info',150);
            $table->float('price');
            $table->integer('status');
            $table->string('notes_for_client',100);
            $table->integer('created_by');
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
        Schema::dropIfExists('orders');
    }
}
