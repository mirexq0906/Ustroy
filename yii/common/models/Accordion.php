<?php

namespace common\models;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use Yii;

/**
 * This is the model class for table "accordion".
 *
 * @property int $id
 * @property int $services_id
 * @property string $name
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 */
class Accordion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'accordion';
    }
    public function getServices() {
        return $this->hasOne(Services::className(), ['id' =>'services_id']);
    }
    /**
     * {@inheritdoc}
     */
    public function  behaviors() {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('NOW()'),
            ],
        ];
    }
    public function rules()
    {
        return [
            [['services_id', 'name', 'content'], 'required'],
            [['services_id'], 'integer'],
            [['content'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№',
            'services_id' => 'Название сервиса',
            'name' => 'Заголовок',
            'content' => 'Текст',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
        ];
    }
}
