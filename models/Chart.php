<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chart".
 *
 * @property int $id_chart
 * @property string $username
 * @property int $id_produk
 * @property string $total
 */
class Chart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'chart';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'id_produk', 'total'], 'required'],
            [['id_produk'], 'integer'],
            [['username', 'total'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_chart' => 'Id Chart',
            'username' => 'Username',
            'id_produk' => 'Id Produk',
            'total' => 'Total',
        ];
    }
}
