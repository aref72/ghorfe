<?php
/* @var $this yii\web\View */
?>
<h1>user/index</h1>

<p>
<?php
    for ($i=0; $i < count($userModel) ; $i++) { 
        echo $userModel[$i]->username.'<br>';
    }
?>
</p>
