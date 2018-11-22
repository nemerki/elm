<?php namespace Avirdigital\Elm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalElmDiscounts extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_elm_discounts', function($table)
        {
            $table->boolean('is_active')->default(1);
            $table->increments('id')->unsigned(false)->change();
            $table->string('title')->change();
            $table->string('slug')->change();
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_elm_discounts', function($table)
        {
            $table->dropColumn('is_active');
            $table->increments('id')->unsigned()->change();
            $table->string('title', 191)->change();
            $table->string('slug', 191)->change();
        });
    }
}
