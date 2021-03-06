<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\LaporAduan */

$this->title = 'Lapor Aduan '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lapor Aduans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lapor-aduan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            // 'foto:image',
            [                   
                'label' => 'Foto',
                'value' => $model->foto,
                'format' => ['image', ['width' =>  '150px', 'height'=> '100px']],
            ],
            'deskripsi:ntext',
            [ // idk now why doesnt work
                'attribute' => 'user',
                'value' => function ($model) {
                    return $model->user->username;
                }
            ],
            [
                'attribute' => 'pembangunan/ Id',
                'value' => function ($model) {
                    return $model->pembangunan->nama_pembangunan.' / '.$model->pembangunan->id;
                }
            ],
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
