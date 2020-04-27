<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        //..
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'cache' => 'cache' //Включаем кеширование
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site/index',
                '<_a:[\w\-]+>' => 'site/<_a>',
            ],
        ],
    ],
];
