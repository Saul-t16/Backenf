<?php
namespace api\modules\v1\controllers;
use yii\rest\ActiveController;

class OwnerController extends ActiveController {
    public $modelClass = 'common\models\Owner';
}