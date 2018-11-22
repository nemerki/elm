<?php namespace Avirdigital\Elm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalElmPartners2 extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_elm_partners', function($table)
        {
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_elm_partners', function($table)
        {
            $table->dropColumn('id');
        });
    }
}
