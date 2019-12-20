<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $id_produk
 * @property string $username
 * @property string $nama_produk
 * @property string $jenis_produk
 * @property string $harga
 * @property string $stok
 * @property string $img
 * @property string $tgl_post
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'nama_produk', 'jenis_produk', 'harga', 'stok'], 'required'],
            [['tgl_post'], 'safe'],
            [['img'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['username', 'nama_produk', 'jenis_produk', 'harga', 'stok'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_produk' => 'Id Produk',
            'username' => 'Username',
            'nama_produk' => 'Nama Produk',
            'jenis_produk' => 'Jenis Produk',
            'harga' => 'Harga',
            'stok' => 'Stok',
            'img' => 'Img',
            'tgl_post' => 'Tgl Post',
        ];
    }
    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('img/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
