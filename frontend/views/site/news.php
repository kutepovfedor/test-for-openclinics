<?php

use yii\helpers\Html;
use yii\grid\GridView;
// use yii\helpers\ArrayHelper;
use frontend\models\News;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            [
                'attribute' => 'statis',
                // 'label' => 'Активность',
                'value' => function($model) {return News::statusList()[$model->statis];},
                'filter' => News::statusList()
            ],
            'alias',
            'description',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}', 'urlCreator' => function($action, $model, $key, $index) {return '/news/'.$model->alias;}],
        ],
    ]); ?>
</div>
