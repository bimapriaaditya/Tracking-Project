<?php

namespace app\controllers;

use Yii;
use app\models\Projek;
use app\models\ProjekSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * ProjekController implements the CRUD actions for Projek model.
 */

class ProjekController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['view'],
                        'roles' => ['?'], //yang bisa diakses kalau tidak login
                    ],
                    [
                        'allow' => true,
                        'actions' => ['index','update','view','create','delete'],
                        'roles' => ['@'], // yang bisa diakses kalau sudah login
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all Projek models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProjekSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination = ['pageSize' => 10];
        $this->getView()->registerJsFile('js/fileinput.js');

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Projek model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Projek model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Projek();
        
        if ($model->load(Yii::$app->request->post())){

            $model->urutan = $model->getUrutanProject();

            $model->rentang_waktu = $model->getRangeTime();

            $model->kode = $model->getKodeproject();
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }else{
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Projek model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())){  
            $model->kode = $model->getKodeproject();
            $model->rentang_waktu = $model->getRangeTime();
            if($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }else{
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Projek model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Projek model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Projek the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Projek::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
