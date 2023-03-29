<?php

namespace Yamobile\LeadTracker\Models;

use October\Rain\Database\Model;

class Settings extends Model
{
    public $implement = [
            \System\Behaviors\SettingsModel::class,
    ];

    public $settingsCode = 'yamobile_leadtracker_settings';

    public $settingsFields = 'fields.yaml';
}