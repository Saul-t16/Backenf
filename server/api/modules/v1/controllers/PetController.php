<?php
namespace api\modules\v1\controllers;
use yii\rest\ActiveController;

class PetController extends ActiveController {
    public $modelClass = 'common\models\Pet';

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
}