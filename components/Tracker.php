<?php

namespace Yamobile\LeadTracker\Components;

use Cms\Classes\ComponentBase;
use Yamobile\LeadTracker\Models\Lead;

class Tracker extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'yamobile.leadtracker::lang.components.tracker.name',
            'description' => 'yamobile.leadtracker::lang.components.tracker.description',
        ];
    }

    public function onSubmitLeadForm()
    {
        $lead = new Lead;

        $lead->name = $_POST['name'];
        $lead->phone = $_POST['phone'];
        $lead->email = $_POST['email'];

        $lead->save();
    }
}