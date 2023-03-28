<?php

namespace Yamobile\LeadTracker\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddYamobileLeadtrackerLeads extends Migration
{
    public function up()
    {
        Schema::table('yamobile_leadtracker_leads', function ($table) {
            $table->string('user_agent')->nullable();
            $table->string('device_type')->nullable();
            $table->string('browser_name')->nullable();
            $table->string('platform_name')->nullable();
        });
    }

    public function down()
    {
        Schema::table('yamobile_leadtracker_leads', function ($table) {
            $table->dropColumn(['user_agent', 'device_type', 'browser_name','platform_name']);
        });
    }
}