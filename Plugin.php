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
                \Yamobile\LeadTracker\Components\Tracker::class => 'Tracker',
        ];
    }

    public function registerSettings()
    {
        return [
            'leadtracker' => [
                'label' => 'yamobile.leadtracker::lang.settings.label',
                'description' => 'yamobile.leadtracker::lang.settings.description',
                'category' => 'yamobile.leadtracker::lang.settings.category',
                'icon' => 'icon-group',
                'class' => \Yamobile\LeadTracker\Models\Settings::class,
                'order' => 500,
                'keywords' => 'yamobile.leadtracker::lang.settings.keywords'
            ]
        ];
    }

    public function registerMailTemplates()
    {
        return [
            'yamobile.leadtracker::mail.lead',
        ];
    }
}