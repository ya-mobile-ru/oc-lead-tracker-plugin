<?php

namespace Yamobile\LeadTracker;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'yamobile.leadtracker::lang.details.name',
            'description' => 'yamobile.leadtracker::lang.details.description',
            'author' => 'yamobile.leadtracker::lang.details.author',
            'icon' => 'icon-group',
            'homepage' => 'https://github.com/ya-mobile-ru/lead-plugin',
        ];
    }

    public function registerNavigation()
    {
        return [
            'LeadTracker' => [
                'label' => 'yamobile.leadtracker::lang.details.name',
                'url' => Backend::url('yamobile/leadtracker/leads'),
                'icon' => 'icon-group',
            ],
        ];
    }

    public function registerComponents()
    {
        return [
                \Yamobile\LeadTracker\Components\Tracker::class => 'yamobile.leadtracker::lang.components.tracker.name',
        ];
    }
}