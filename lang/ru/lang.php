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
        'utm_source' => 'Источник кампании - utm_source',
        'utm_medium' => 'Канал кампании - utm_medium',
        'utm_campaign' => 'Название кампании - utm_campaign',
        'utm_term' => 'Ключевое слово - utm_term',
        'utm_content' => 'Содержание кампании - utm_content',
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
];