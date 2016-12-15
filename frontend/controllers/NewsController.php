<?php
namespace frontend\controllers;

use common\models\News;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class NewsController extends Controller
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
        $this->view->params['bodyClass'] = 'news';
        $this->view->params['footer'] = false;
        return $this->render('index',array(
            'news'=>News::find()->limit(10)->asArray()->all()
        ));
    }
    public function actionView($id)
    {
        $this->view->params['bodyClass'] = 'one-news';
        return $this->render('view',array(
            'one_news'=>News::findOne($id),
            'all_news'=>News::find()
                    ->limit(3)
                    ->where('id != :id', ['id'=>$id])
                    ->orderBy(['date'=>SORT_DESC])
                    ->all()
        ));
    }
}

?>
