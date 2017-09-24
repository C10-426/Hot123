<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertises', function (Blueprint $table) {            
            $table->increments('id');  
			$table->integer('type_id');          
            $table->string('ad_plaform_id');            
            $table->string('ad_url');            
            $table->float('ad_price', 8, 3);            
            $table->integer('show_count');            
            $table->string('ad_image_url');            
            $table->dateTimeTz('start_time');            
            $table->dateTimeTz('end_time');            
            $table->string('ad_description')->nullable();            
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));            
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertises');
    }
}
