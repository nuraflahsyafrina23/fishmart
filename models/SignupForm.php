<?php
namespace app\models;
use yii\base\Model;
use Yii;
/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $role;
    public $email;
    public $password;
    public $nama;
    public $alamat;
    public $no_hp;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => 'app\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => 'app\models\User', 'message' => 'This email address has already been taken.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['nama', 'filter', 'filter' => 'trim'],
            ['nama', 'required'],
            ['alamat', 'filter', 'filter' => 'trim'],
            ['alamat', 'required'],
            ['no_hp', 'filter', 'filter' => 'trim'],
            ['no_hp', 'required'],
        ];
    }
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->role = 0;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->nama = $this->nama;
            $user->alamat = $this->alamat;
            $user->no_hp = $this->no_hp;
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }
        return null;
    }
}