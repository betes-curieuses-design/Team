<?php namespace Alexcorp\Team\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMembersTable extends Migration
{
    public function up()
    {
        Schema::create('alexcorp_team_members', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('job_title');
            $table->string('phone');
            $table->string('email');
            $table->text('description');
            $table->string('facebook_link');
            $table->string('linkedin_link');
            $table->string('twitter_link');
            $table->string('pinterest_link');
            $table->string('instagram_link');
            $table->integer('priority');
            $table->boolean('published');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alexcorp_team_members');
    }
}
