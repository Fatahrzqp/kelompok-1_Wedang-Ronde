<?php

namespace app\controllers;

use app\models\Konsumen;
use app\models\KonsumenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KonsumenController implements the CRUD actions for Konsumen model.
 */
class KonsumenController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Konsumen models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KonsumenSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Konsumen model.
     * @param int $id_Konsumen Id Konsumen
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_Konsumen)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_Konsumen),
        ]);
    }

    /**
     * Creates a new Konsumen model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Konsumen();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_Konsumen' => $model->id_Konsumen]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Konsumen model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_Konsumen Id Konsumen
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_Konsumen)
    {
        $model = $this->findModel($id_Konsumen);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_Konsumen' => $model->id_Konsumen]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Konsumen model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_Konsumen Id Konsumen
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_Konsumen)
    {
        $this->findModel($id_Konsumen)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Konsumen model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_Konsumen Id Konsumen
     * @return Konsumen the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_Konsumen)
    {
        if (($model = Konsumen::findOne(['id_Konsumen' => $id_Konsumen])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
