<?php

namespace app\controllers;

use app\models\User;
use yii\data\ActiveDataProvider;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $userModel = User::find();
        $activeDataProvider = new ActiveDataProvider([
            'query' => $userModel,
            'pagination' => [
                'pageSize'=>5
            ]
        ]);
        
        return $this->render('index',[
            'activeDataProvider' => $activeDataProvider
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
