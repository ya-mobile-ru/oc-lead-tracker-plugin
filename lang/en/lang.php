<?php

return [
    'details' => [
        'name' => 'Lead Tracker',
        'description' => 'Lead tracking system',
        'author' => 'Ya-mobile',
    ],
    'lead' => [
        'id' => 'ID',
        'name' => 'Name',
        'name_placeholder' => 'John',
        'phone' => 'Phone',
        'phone_placeholder' => '+1 (400) 000-00-00',
        'email' => 'Email',
        'email_placeholder' => 'admin@gmail.com',
        'more' => 'Optional field',
        'no-data' => 'No data',
        'info' => 'Info',
        'info_placeholder' => 'Information',
        'source' => 'Source',
        'ip' => 'IP',
        'user_agent' => 'User-Agent',
        'created_at' => 'Created at',
        'breadcrumb-index' => 'Leads',
        'breadcrumb-create' => 'New lead',
        'breadcrumb-preview' => 'Preview lead',
        'breadcrumb-update' => 'Edit lead',
    ],
    'components' => [
        'tracker' => [
            'name' => 'Lead Tracker',
            'description' => 'Component for submitting lead forms',
        ]
    ],
    'settings' => [
        'label' => 'Lead Tracker',
        'description' => 'Notification settings',
        'category' => 'Marketing',
        'keywords' => 'notifications',
        'emails' => [
            'label' => 'Emails',
            'prompt' => 'Add new email',
            'comment' => 'To send notifications to',
            'email_label' => 'Email',
            'email_placeholder' => 'admin@gmail.com',
        ],
    ],
];