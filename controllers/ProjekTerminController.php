<?php

namespace app\controllers;

use Yii;
use app\models\ProjekTermin;
use app\models\Projek;
use app\models\ProjekTerminSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProjekTerminController implements the CRUD actions for ProjekTermin model.
 */
class ProjekTerminController extends Controller
{
    /**
     * {@inheritdoc}
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

    /**
     * Lists all ProjekTermin models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProjekTerminSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProjekTermin model.
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
     * Creates a new ProjekTermin model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id_projek)
    {
        $model = new ProjekTermin();

        $model->id_projek = $id_projek;

        // Cara 1
        // $modelprojek = Projek::findOne($id_projek);

        if ($model->load(Yii::$app->request->post())) {
            // Masih Cara 1 : 
            // $model->jumlah = ($model->persen/100) * $modelprojek->nilai_kontrak;

            //Cara 2
            $model->jumlah = ($model->persen/100)*($model->projek->nilai_kontrak);
            if($model->save()) {
               return $this->redirect(['projek/view', 'id' => $model->id_projek]);
            }
        }else{
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ProjekTermin model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->jumlah = ($model->persen/100) * ($model->projek->nilai_kontrak);
            if($model->save()) {
                return $this->redirect(['projek/view', 'id' => $model->id_projek]);
            }
        }else{
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ProjekTermin model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        $this->findModel($id)->delete();

        return $this->redirect(['projek/view', 'id' => $model->id_projek]);
    }

    /**
     * Finds the ProjekTermin model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ProjekTermin the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    
    protected function findModel($id)
    {
        /*$termin = ProjekTermin::find()->andWhere(['id' =>12212])->one();
        echo $termin->nama;*/
        if (($model = ProjekTermin::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
