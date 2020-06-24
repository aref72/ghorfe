<?php

namespace app\controllers;

use app\models\User;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\BadRequestHttpException;

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

    public function actionUpdate($id)
    {
        $userModel = User::findOne($id);
        if($userModel->load(Yii::$app->request->post())){
            if($userModel->save()){
                return $this->redirect('?r=user/index');
            }
        }
        // $userModel->save();
        return $this->render('update',[
            'userModel' => $userModel
        ]);
    }

    public function actionDelete($id)
    {
        if(!is_numeric($id)){
            throw new BadRequestHttpException("شناسه باید عددی باشد.");
        }
        $userModel = User::findOne($id);
        if(!isset($userModel)){
            throw new BadRequestHttpException("هیچ رکوردی پیدا نشد.");
        }
        if($userModel->delete()){
            return $this->redirect('?r=user/index');
        }
    }
    
}
