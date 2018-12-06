<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRfqItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rfq_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_type');
            $table->string('catalogue');
            $table->string('item_name');
            $table->string('unit_size')->nullable();
            $table->integer('qty');
            $table->text('url')->nullable();
            $table->string('urgent')->default('off');
            $table->date('urgent_date')->nullable();
            $table->unsignedInteger('rfq_id');
            $table->foreign('rfq_id')->references('id')->on('rfqs');
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
        Schema::dropIfExists('rfq_items');
    }
}
