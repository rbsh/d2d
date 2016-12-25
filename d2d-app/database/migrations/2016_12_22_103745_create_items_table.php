<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->string('item_title');
            $table->string('brand');
            $table->string('short_desc')->nullable();
            $table->text('text')->nullable();
            $table->string('delivery_area')->nullable();
            $table->string('video')->nullable();
            $table->string('photo')->nullable();
            
            $table->float('price_1');
            $table->float('dis_price_1');
            $table->string('size_1');
            $table->integer('qty_1');
            $table->integer('max_1');
            $table->string('image_1');

            $table->float('price_2')->nullable();
            $table->float('dis_price_2')->nullable();
            $table->string('size_2')->nullable();
            $table->integer('qty_2')->nullable();
            $table->integer('max_2')->nullable();
            $table->string('image_2')->nullable();

            $table->float('price_3')->nullable();
            $table->float('dis_price_3')->nullable();
            $table->string('size_3')->nullable();
            $table->integer('qty_3')->nullable();
            $table->integer('max_3')->nullable();
            $table->string('image_3')->nullable();

            $table->float('price_4')->nullable();
            $table->float('dis_price_4')->nullable();
            $table->string('size_4')->nullable();
            $table->integer('qty_4')->nullable();
            $table->integer('max_4')->nullable();
            $table->string('image_4')->nullable();

            $table->text('tab_title_1')->nullable();
            $table->text('tab_title_2')->nullable();
            $table->text('tab_title_3')->nullable();
            $table->text('tab_title_4')->nullable();
            $table->text('tab_title_5')->nullable();
            $table->text('tab_title_6')->nullable();

            $table->text('tab_text_1')->nullable();
            $table->text('tab_text_2')->nullable();
            $table->text('tab_text_3')->nullable();
            $table->text('tab_text_4')->nullable();
            $table->text('tab_text_5')->nullable();
            $table->text('tab_text_6')->nullable();
            $table->integer('status');
            $table->integer('row_order');




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
        Schema::dropIfExists('items');
    }
}
