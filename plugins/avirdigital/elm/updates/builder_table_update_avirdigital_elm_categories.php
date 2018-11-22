<?php namespace Avirdigital\Elm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalElmCategories extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_elm_categories', function($table)
        {
            $table->integer('group_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_elm_categories', function($table)
        {
            $table->dropColumn('group_id');
        });
    }
}
