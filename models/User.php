<?php

namespace app\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    // các field có thể get
    public function fields()
    {
        return [
            'id',
            'email',
            'name',
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return [
            [['company_id', 'email'], 'required'],
            [['email'], 'string', 'max' => 512],
            [['email'], 'email'],
            [['company_id'], 'integer'],
        ];
    }

    // field bị ẩn đi nhưng có thể get với param expand
    public function extraFields()
    {
        return [
            'created_at',
            'email',
            'company'
        ];
    }

    public function attributeLabels()
    {
        return [];
    }

    public function getCompany()
    {
        return $this->hasOne(Company::class, ['id' => 'company_id']);
    }

    public function getName()
    {
        return  $this->family_name . $this->first_name;
    }
}
