<?php

namespace common\models;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii2tech\ar\position\PositionBehavior;
use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string $name
 * @property string $content
 * @property string $name_accordion
 * @property string $keywords
 * @property string $description
 * @property string $slug
 * @property int $status
 * @property int $sorter
 * @property int $created_at
 * @property int $updated_at
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }
    public function getAccordion() {
        return $this->hasMany(Accordion::className(), ['services_id'=>'id']);
    }
    /**
     * {@inheritdoc}
     */
    public function  behaviors() {
        return [
            'slug' => [
                'class' => 'common\components\behaviors\slug',
                'in_attribute' => 'name',
                'out_attribute' => 'slug',
                'translit' => true
            ],
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('NOW()'),
            ],
            'sorter' => [
                'class' => PositionBehavior::className(),
                'positionAttribute' => 'sorter',
            ],
        ];
    }
    public function rules()
    {
        return [
            [['name', 'content', 'status'], 'required'],
            [['content'], 'string'],
            [['slug'], 'unique'],
            [['status', 'sorter'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'name_accordion', 'keywords', 'description', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№',
            'name' => 'Название',
            'content' => 'Текст',
            'name_accordion' => 'Название аккордиона',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'slug' => 'Название url',
            'status' => 'Статус',
            'sorter' => 'Сортировка',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
        ];
    }
}
