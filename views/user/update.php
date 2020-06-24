<h3>ویرایش کاربر</h3>
<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$activeForm = ActiveForm::begin();
echo $activeForm->field($userModel,'username');
echo $activeForm->field($userModel,'password');
echo $activeForm->field($userModel,'is_active');
echo Html::submitButton('ذخیره',['class'=>'btn btn-success']);
ActiveForm::end();
