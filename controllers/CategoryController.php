<?php

namespace app\controllers;

use Yii;
use app\models\User;
use yii\base\Controller;
use yii\rest\ActiveController;

class CategoryController extends ActiveController
{
    public $modelClass = User::class;

}
