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
            $table->string('order_review_code',45)->unique();
            $table->string('first_name',45);
            $table->string('last_name',45);
            $table->string('phone_number',15);
            $table->string('email',45);
            $table->string('service',80);
            $table->string('work_performed', 80)->nullable();
            $table->string('company_name',100)->nullable();
            $table->string('additional_info',150)->nullable();
            $table->float('price')->nullable();
            $table->integer('status')->default(0);
            $table->string('notes_for_client',100)->nullable();
            $table->integer('created_by');
            $table->boolean('findable')->default(1);
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
