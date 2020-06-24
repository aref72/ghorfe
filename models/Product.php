<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property int|null $price
 * @property int|null $offer_price
 * @property int|null $count_view
 * @property int|null $is_active
 * @property int|null $user_id
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['price', 'offer_price', 'count_view', 'is_active', 'user_id'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['created_at', 'updated_at'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'price' => 'Price',
            'offer_price' => 'Offer Price',
            'count_view' => 'Count View',
            'is_active' => 'Is Active',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
