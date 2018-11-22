<?php namespace Avirdigital\Elm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalElmSliders extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_elm_sliders', function($table)
        {
            $table->boolean('is_active')->default(1);
            $table->increments('id')->unsigned(false)->change();
            $table->string('name')->change();
            $table->string('link')->change();
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_elm_sliders', function($table)
        {
            $table->dropColumn('is_active');
            $table->increments('id')->unsigned()->change();
            $table->string('name', 191)->change();
            $table->string('link', 191)->change();
        });
    }
}
