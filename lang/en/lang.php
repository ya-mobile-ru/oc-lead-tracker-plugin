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
        'utm_source' => 'Campaign source - utm_source',
        'utm_medium' => 'Campaign channel - utm_medium',
        'utm_campaign' => 'Campaign name - utm_campaign',
        'utm_term' => 'Keyword - utm_term',
        'utm_content' => 'Campaign content - utm_content',
        'device_type' => 'Device type',
        'browser_name' => 'Browser name',
        'platform_name' => 'Platform name',
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
        'fields' => [
            'is_phone_required' => [
                'label' => 'Phone is required',
                'comment' => 'If enabled, phone will be a required parameter',
            ],
        ],
    ],
];
