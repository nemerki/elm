<?php namespace Avirdigital\Elm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAvirdigitalElmSupports extends Migration
{
    public function up()
    {
        Schema::create('avirdigital_elm_supports', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->text('content')->nullable();
            $table->boolean('is_active')->default(1);
            $table->integer('sort_order')->nullable()->unsigned();
            $table->string('slug')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('avirdigital_elm_supports');
    }
}
