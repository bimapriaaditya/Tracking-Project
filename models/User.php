<?php

namespace app\models;
use app\models\User;
use Yii;
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{


    const ADMIN = 1;
    const PIMPINAN = 2;
 

    public static function tableName()
    {
        return 'user';
    }


    public static function findIdentity($id)
    {
        // return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
        $user = User::findOne($id);
        if($user !== null){
            return new static($user);
        }
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
       /* foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }*/

        $user = User::find()->where(['accessToken'=>$token])->one();
        if(count($user))
        {
            return new static($user);
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        /*foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }*/
        $user = User::find()->where(['username'=>$username])->one();
        if($user !== null)
        {
            return new static($user);
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    public static function isPimpinan()
    {
        if(Yii::$app->user->identity->id_role == self::PIMPINAN){
            return true;
        } 
        return false;
    }

    public static function isAdmin()
    {
        if(Yii::$app->user->identity->id_role == self::ADMIN){
            return true;
        } 
        return false;   
    }


}
