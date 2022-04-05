<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Owner */

$this->title = Yii::t('app', 'Create Owner');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Owners'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="owner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
