<?php

namespace app\controllers;

use app\models\User;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
        // $userModel = User::find()->where(['is_active' => 0])->orderBy('id desc')->all();
        $userModel = User::findOne(1);
        var_dump($userModel);
        die();
        return $this->render('index',[
            'userModel' => $userModel
        ]);
    }

    public function actionCreate()
    {
        $userModel = new User();
        $userModel->username = 'hamed';
        $userModel->password = '12345678';
        $userModel->is_active = 1;
        $userModel->save();

    }

    public function actionUpdate()
    {
        $userModel = User::findOne(6);
        $userModel->username = 'mahdi';
        $userModel->password = '12345678';
        $userModel->is_active = 0;
        $userModel->save();
    }

    public function actionDelete()
    {
        $userModel = User::findOne(6);
        
        $userModel->delete();
    }
    
}
