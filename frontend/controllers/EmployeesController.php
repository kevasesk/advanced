<?php
namespace frontend\controllers;

use common\models\Employees;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class EmployeesController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    public function actionIndex()
    {
        $this->view->params['bodyClass'] = 'employees';
        return $this->render('index',array(
            'employees'=>Employees::find()->limit(7)->asArray()->all()
        ));
    }
//    public function actionView()
//    {
//        $this->view->params['bodyClass'] = 'employees';
//        return $this->render('view',array(
//            'employees'=>Employees::find()->all()
//        ));
//    }
}

?>
