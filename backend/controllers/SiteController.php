<?php
	namespace backend\controllers;

	use Yii;
	use yii\filters\AccessControl;
	use yii\web\Controller;
	use yii\web\ErrorAction;

	/**
	 * Site controller
	 */
	class SiteController extends Controller
	{
		public function behaviors()
		{
			return [
				'access' => [
					'class' => AccessControl::className(),
					'rules' => [
						[
							'actions' => ['index', 'error'],
							'allow'   => TRUE,
							'roles'   => ['@'],
						],
					],
				],
			];
		}

		/**
		 * @inheritdoc
		 */
		public function actions()
		{
			return [
				'error' => [
					'class' => ErrorAction::className(),
				],
			];
		}

		/**
		 * Initiates application setup
		 *
		 * @return string|\yii\web\Response
		 */
		public function actionIndex()
		{
			return $this->render('index');
		}
	}
