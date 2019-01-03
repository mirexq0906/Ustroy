<?php

namespace common\models;
use zxbodya\yii2\galleryManager\GalleryBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii2tech\ar\position\PositionBehavior;
use Yii;

/**
 * This is the model class for table "production".
 *
 * @property int $id
 * @property string $name
 * @property string $content
 * @property string $keywords
 * @property string $description
 * @property string $slug
 * @property int $status
 * @property int $sorter
 * @property string $created_at
 * @property string $updated_at
 */
class Production extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'production';
    }

    /**
     * {@inheritdoc}
     */
    public function  behaviors() {
        return [
            'galleryBehavior' => [
                'class' => GalleryBehavior::className(),
                'type' => 'production',
                'extension' => 'jpg',
                'directory' => Yii::getAlias('@images') . '/production/gallery',
                'url' => Yii::getAlias('@imagesUrl') . '/production/gallery',
                'versions' => [
                    'small' => function ($img) {
                        /** @var \Imagine\Image\ImageInterface $img */
                        return $img
                            ->copy()
                            ->thumbnail(new \Imagine\Image\Box(200, 200));
                    },
                    'medium' => function ($img) {
                        /** @var \Imagine\Image\ImageInterface $img */
                        $dstSize = $img->getSize();
                        $maxWidth = 800;
                        if ($dstSize->getWidth() > $maxWidth) {
                            $dstSize = $dstSize->widen($maxWidth);
                        }
                        return $img
                            ->copy()
                            ->resize($dstSize);
                    },
                ]
            ],
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
            [['name', 'content'], 'required'],
            [['content'], 'string'],
            [['slug'], 'unique'],
            [['status', 'sorter'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'keywords', 'description', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '#',
            'name' => 'Название',
            'content' => 'Текст',
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
