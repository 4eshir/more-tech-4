<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Achievment $model */

$this->title = 'Create Achievment';
$this->params['breadcrumbs'][] = ['label' => 'Achievments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="achievment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
