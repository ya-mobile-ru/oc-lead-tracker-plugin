<?php

namespace Yamobile\LeadTracker\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateYamobileLeadtrackerLeads extends Migration
{
    public function up()
    {
        Schema::create('yamobile_leadtracker_leads', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('info')->nullable();
            $table->string('source')->nullable();
            $table->string('ip')->nullable();
            $table->string('user_agent')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('yamobile_leadtracker_leads');
    }
}