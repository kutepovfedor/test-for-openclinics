<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\News;

/* @var $this yii\web\View */
/* @var $model frontend\models\News */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['/news']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'statis',
                'value' => News::statusList()[$model->statis]
            ],
            'name',
            'alias',
            'description',
            'content:ntext',
            'create_at',
            'update_at',
        ],
    ]) ?>

</div>
