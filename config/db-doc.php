<?php

// config for Bekwoh/LaravelDbDoc

use Bekwoh\LaravelDbDoc\Presentation\Json;
use Bekwoh\LaravelDbDoc\Presentation\Markdown;

return [
    'format' => 'markdown',
    'presentations' => [
        'markdown' => [
            'class' => Markdown::class,
            'disk' => 'local',
        ],
        'json' => [
            'class' => Json::class,
            'disk' => 'local',
        ],
    ],
];