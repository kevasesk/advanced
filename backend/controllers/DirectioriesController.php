<?php

namespace backend\controllers;

use common\models\Employees;
use Yii;
use common\models\Directiories;
use common\models\DirectioriesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;

/**
 * DirectioriesController implements the CRUD actions for Directiories model.
 */
class DirectioriesController extends Controller
{
    /**
     * @inheritdoc
     */
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
        $searchModel = new DirectioriesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function upload()
    {
        $upload = new UploadForm();

        if (Yii::$app->request->isPost) {

            $upload->imageFile = UploadedFile::getInstance($upload, 'imageFile');

            $file_uploaded=$upload->upload($this);
            if ($file_uploaded['upload']) {


                return $file_uploaded['fileName'];
            }
        }

        return '';
    }
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    public function actionCreate()
    {
        $model = new Directiories();
        $upload = new UploadForm();
        $employees=Employees::find()
                ->select(['id','name'])
                ->asArray()
                ->all();
        $employees_filtered = ArrayHelper::getColumn($employees, 'name');


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $upload->load(Yii::$app->request->post());
            $file=$this->upload();
            if($file!=='')
            {
                $model->icon =$file;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'upload'=>$upload,
                'employees'=>$employees_filtered
            ]);
        }
    }

    /**
     * Updates an existing Directiories model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $upload = new UploadForm();
        $employees=Employees::find()
            ->select(['id','name'])
            ->asArray()
            ->all();
        $employees_filtered = ArrayHelper::getColumn($employees, 'name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $upload->load(Yii::$app->request->post());

            $file=$this->upload();
            if($file!=='')
            {
//                var_dump($model);
//                exit();

                $model->icon =$file;
            }

           // $model->icon=($this->upload()!=='') ?  : $model->icon;

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'upload'=>$upload,
                'employees'=>$employees_filtered
            ]);
        }
    }

    /**
     * Deletes an existing Directiories model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Directiories model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Directiories the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Directiories::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
