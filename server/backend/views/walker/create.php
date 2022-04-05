<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Walker */

$this->title = Yii::t('app', 'Create Walker');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Walkers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="walker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
