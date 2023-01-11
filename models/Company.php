<?php

namespace app\models;

use yii\db\ActiveRecord;

class Company extends ActiveRecord
{
    // các field có thể get
    // public function fields(){
    //     return ['id'];
    // }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'companies';
    }

    public function rules()
    {
        // return [
        //     [['company_id', 'email'], 'required'],
        //     [['email'], 'string', 'max' => 512],
        //     [['email'], 'email'],
        //     [['company_id'], 'integer'],
        // ];
    }

    // field bị ẩn đi nhưng có thể get với param expand
    public function extraFields()
    {
        return [
            'created_at',
            'email',
        ];
    }
}
