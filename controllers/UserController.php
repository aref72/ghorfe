<?php

namespace app\controllers;

use app\models\User;
use Yii;
use yii\data\ActiveDataProvider;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $userModel = User::find()->orderBy('id desc');
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
        if($userModel->load(Yii::$app->request->post())){
            if($userModel->save()){
                return $this->redirect('?r=user/index');
            }

        }
        return $this->render('create',[
            'userModel'=>$userModel
        ]);
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
