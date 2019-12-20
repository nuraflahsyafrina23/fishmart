<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id_transaksi
 * @property int $total
 * @property string $harga
 * @property string $status
 * @property string $tgl_transaksi
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['total', 'harga', 'status'], 'required'],
            [['total'], 'integer'],
            [['tgl_transaksi'], 'safe'],
            [['harga', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transaksi' => 'Id Transaksi',
            'total' => 'Total',
            'harga' => 'Harga',
            'status' => 'Status',
            'tgl_transaksi' => 'Tgl Transaksi',
        ];
    }
}
