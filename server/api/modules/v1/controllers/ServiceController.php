<?php
namespace api\modules\v1\controllers;
use yii\rest\ActiveController;

class ServiceController extends ActiveController {
    public $modelClass = 'common\models\Service';
}