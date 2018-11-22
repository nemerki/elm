<?php namespace Avirdigital\Elm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalElmKategories extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_elm_kategories', function($table)
        {
            $table->integer('sub_id')->nullable(false)->unsigned(false)->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_elm_kategories', function($table)
        {
            $table->integer('sub_id')->nullable()->unsigned()->default(null)->change();
        });
    }
}
