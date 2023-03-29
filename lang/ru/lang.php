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
        'more' => 'Доп. поля',
        'no-data' => 'Нет данных',
        'info_placeholder' => 'Информация',
        'source' => 'Источник',
        'ip' => 'IP',
        'user_agent' => 'User-Agent',
        'device_type' => 'Тип дивайса',
        'browser_name' => 'Имя браузера',
        'platform_name' => 'Операционая система',
        'created_at' => 'Создано',
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
    'settings' => [
        'label' => 'Lead Tracker',
        'description' => 'Настройки оповещений',
        'category' => 'Маркетинг',
        'keywords' => 'оповещения',
        'emails' => [
            'label' => 'Email\'ы',
            'prompt' => 'Добавить новый email',
            'comment' => 'Для уведомлений',
            'email_label' => 'Email',
            'email_placeholder' => 'admin@gmail.com',
        ],
    ],
];