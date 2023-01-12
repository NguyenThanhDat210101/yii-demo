<?php

namespace app\controllers;

use Yii;
use app\models\User;
use app\trait\ApiResponse;
use yii\data\Pagination;
use yii\filters\ContentNegotiator;
use yii\rest\ActiveController;
use yii\web\Response;

class UserController extends ActiveController
{
    use ApiResponse;
    public $modelClass = User::class;

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['index']);
        return $actions;
    }

    // /**
    //  * @inheritdoc
    //  */
    // public function behaviors()
    // {
    //     return [
    //         [
    //             'class' => ContentNegotiator::className(),
    //             'only' => ['index', 'view'],
    //             'formats' => [
    //                 'application/json' => Response::FORMAT_JSON,
    //             ],
    //         ],
    //     ];
    // }

    public function actionIndex()
    {
        //  
        $query = $this->modelClass::find();
        if (!$query->exists()) {
            return $this->errorResponse(Yii::t('text/en', 'not_found'));
        }
        $paginate = new Pagination(['totalCount' => $query->count()]);

        $result = $query->offset($paginate->offset)
            ->limit($paginate->limit)
            ->all();

        return $this->successResponse(Yii::t('text/en', 'success'), $result);
    }
}
