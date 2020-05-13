<?php
/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\helpers\Url;
?>
<a href="<?= Url::to(['create']) ?>" class="btn btn-success">کاربر جدید</a>

<p>
<?php
   echo GridView::widget([
        'dataProvider' => $activeDataProvider
    ])
?>
</p>
