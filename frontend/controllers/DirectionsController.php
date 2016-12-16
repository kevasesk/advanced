<?php
namespace frontend\controllers;

use common\models\Directiories;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class DirectionsController extends Controller
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
        $this->view->params['bodyClass'] = 'directions';
        return $this->render('index',array(
            'directions'=>Directiories::find()->limit(9)->asArray()->all()
        ));
    }
    public function actionView()
    {
        $this->view->params['bodyClass'] = 'one-direction';
        return $this->render('view',array(
            'all_directions'=>Directiories::find()->all()
        ));
    }
}

?>
