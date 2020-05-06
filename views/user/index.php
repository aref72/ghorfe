<?php
/* @var $this yii\web\View */

use yii\grid\GridView;

?>
<h1>user/index</h1>

<p>
<?php
   echo GridView::widget([
        'dataProvider' => $activeDataProvider
    ])
?>
</p>
