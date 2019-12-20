<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ulasan".
 *
 * @property int $id_ulasan
 * @property string $komentar
 * @property int $nilai
 * @property string $tgl_post
 */
class Ulasan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ulasan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['komentar', 'nilai'], 'required'],
            [['nilai'], 'integer'],
            [['tgl_post'], 'safe'],
            [['komentar'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ulasan' => 'Id Ulasan',
            'komentar' => 'Komentar',
            'nilai' => 'Nilai',
            'tgl_post' => 'Tgl Post',
        ];
    }
}
