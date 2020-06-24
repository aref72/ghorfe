<?php
/* @var $this yii\web\View */

use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Url;
?>
<a href="<?= Url::to(['create']) ?>" class="btn btn-success">کاربر جدید</a>

<p>
<?php
   echo GridView::widget([
        'dataProvider' => $activeDataProvider,
        'columns' => [
            'id',
            'username',
            'is_active',
            'buttons'=>[
                'class' => ActionColumn::class,
                'template' => '{update} {delete}',
                // 'buttons' => [
                //     'update'=> function($a,$b,$c){
                //         return "aref";
                //     }
                // ]
              
            ]
        ]
    ])
?>
</p>
