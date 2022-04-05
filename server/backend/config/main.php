<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
	'language' => 'es',
	'sourceLanguage' => 'en',
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log','languagepicker'],
    'modules' => [],
    'components' => [
		'languagepicker' => [
			'class' => 'lajax\languagepicker\Component',
			'languages' => ['en' => 'English', 'es' => 'Castellano'],
			'cookieName' => 'language',
		],
		'i18n' => [
			'translations' => [
				'app*' => [
					'class' => 'yii\i18n\PhpMessageSource',
					'basePath' => '@backend/messages',
					'sourceLanguage' => 'en',
					'fileMap' => [
						'app' 		=> 'app.php',
						'app/error' => 'error.php',
					],
				],
			],
		],
		'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    ],
    'params' => $params,
];
