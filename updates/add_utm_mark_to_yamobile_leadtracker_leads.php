<?php

namespace Yamobile\LeadTracker\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddUtmMarkToYamobileLeadtrackerLeads extends Migration
{
    public function up()
    {
        Schema::table('yamobile_leadtracker_leads', function ($table) {
            $table->string('utm_source')->nullable();
            $table->string('utm_medium')->nullable();
            $table->string('utm_campaign')->nullable();
            $table->string('utm_term')->nullable();
            $table->string('utm_content')->nullable();
        });
    }

    public function down()
    {
        Schema::table('yamobile_leadtracker_leads', function ($table) {
            $table->dropColumn(['utm_source', 'utm_medium','utm_campaign','utm_term','utm_content']);
        });
    }
}