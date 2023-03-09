<?php

namespace Yamobile\LeadTracker\Components;

use Cms\Classes\ComponentBase;

class Tracker extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'yamobile.leadtracker::lang.components.tracker.name',
            'description' => 'yamobile.leadtracker::lang.components.tracker.description',
        ];
    }
}