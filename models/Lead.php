<?php

namespace Yamobile\LeadTracker\Models;

use Model;

class Lead extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'yamobile_leadtracker_leads';

    public $rules = [
        'email' => 'email',
        'source' => [
            'url',
            'nullable',
        ],
        'ip' => [
            'ip',
            'nullable',
        ],
    ];
}
