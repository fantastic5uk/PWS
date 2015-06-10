<?php

class OfficerController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

    public function beforeAction($action)
    {
        Yii::app()->language = Yii::app()->params['language'];
        return parent::beforeAction($action);
    }
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
        return array(
            array('allow',
                  'actions' => array('index'),
                  //'roles' => array('oSystemFormManage'),
            ),
            array('allow',
                  'actions' => array('view'),
                  //'roles' => array('oSystemFormRead'),
            ),
            array('allow',
                  'actions' => array('create'),
                  //'roles' => array('oSystemFormCreate'),
            ),
            array('allow',
                  'actions' => array('update'),
                  //'roles' => array('oSystemFormUpdate'),
            ),
            array('allow',
                  'actions' => array('delete'),
                  //'roles' => array('oSystemFormDelete'),
            ),
            array('allow',
                  'actions' => array('admin'),
                  //'roles' => array('oSystemFormManage'),
            ),
            array('deny', // Deny all users
                  'users' => array('*'),
            ),
        );
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Officer;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Officer']))
		{
			$model->attributes=$_POST['Officer'];
            $model->createdAt = date(MDate::DB_DATETIME_FORMAT);
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Officer']))
		{
			$model->attributes=$_POST['Officer'];
            $model->updatedAt = date(MDate::DB_DATETIME_FORMAT);
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        $this->redirect(Yii::app()->createUrl('/officer/admin'));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Officer('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Officer']))
			$model->attributes=$_GET['Officer'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Officer the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Officer::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Officer $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='officer-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
