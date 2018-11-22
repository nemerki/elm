<?php namespace Avirdigital\Elm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAvirdigitalElmProjects extends Migration
{
    public function up()
    {
        Schema::table('avirdigital_elm_projects', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('avirdigital_elm_projects', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
