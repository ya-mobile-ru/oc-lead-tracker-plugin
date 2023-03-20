<?php

return [
    'details' => [
        'name' => 'Lead Tracker',
        'description' => 'Система отслеживания лидов',
        'author' => 'Ya-mobile',
    ],
    'lead' => [
        'id' => 'ID',
        'name' => 'Имя',
        'name_placeholder' => 'Иван',
        'phone' => 'Телефон',
        'phone_placeholder' => '+7 (900) 000-00-00',
        'email' => 'Email',
        'email_placeholder' => 'admin@gmail.com',
        'info' => 'Информация',
        'info_placeholder' => 'Информация',
        'source' => 'Источник',
        'ip' => 'IP',
        'user_agent' => 'User-Agent',
        'created_at' => 'Создано',
        'breadcrumb' => 'Лиды',
        'breadcrumb-index' => 'Лиды',
        'breadcrumb-create' => 'Новый лид',
        'breadcrumb-preview' => 'Просмотр лида',
        'breadcrumb-update' => 'Редактирование лида',
    ],
    'components' => [
        'tracker' => [
            'name' => 'Lead Tracker',
            'description' => 'Компонент для приёма лидов с форм',
        ]
    ],
];