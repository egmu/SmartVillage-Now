<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembangunan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

    <div class="pembangunan-index">
    
        <h3><?= Html::encode($this->title) ?></h3>
        <div class="table table-hover text-capitalize">
            <table class="table">
                <thead class="text-uppercase">
                    <th>No</th>
                    <th>nama pembangunan</th>
                    <th>keterangan</th>
                    <th>anggaran</th>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                    <?php foreach ($data as $item) { ?>
                        <tr>
                            <th>
                                <?= Html::a($i, ['id'], ['pembangunan/view', 'id' => $item['id']]) ?>
                            </th>
                            <td><?= $item['nama_pembangunan'] ?></td>
                            <td><?= $item['keterangan'] ?></td>
                            <td><?= $item['anggaran'] ?></td>
                        </tr>
                    <?php $i++; ?>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <span>
            <?= \yii\widgets\LinkPager::widget([
                'pagination' => $pages
            ]); ?>
        </span>
    </div>
</div>