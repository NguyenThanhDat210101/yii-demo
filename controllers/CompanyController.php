<?php

namespace app\controllers;

use app\models\Company;
use Yii;
use app\models\User;
use yii\base\Controller;
use yii\rest\ActiveController;

class CompanyController extends ActiveController
{
    public $modelClass = Company::class;
}
