<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
    ],
];

if (!YII_ENV_TEST) {
    $config['bootstrap'][]      = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';
    $config['bootstrap'][]      = 'gii';
    $config['modules']['gii']   = 'yii\gii\Module';
}

return $config;
