<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lapor_aduan".
 *
 * @property int $id
 * @property string $foto
 * @property string $deskripsi
 * @property int $user_id
 * @property int $pembangunan_id
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class LaporAduan extends \yii\db\ActiveRecord
{
    /**
     * add TimestampBehavior
     */
    public function behaviors()
    {
        return [
            \yii\behaviors\TimestampBehavior::className()
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lapor_aduan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['deskripsi', 'pembangunan_id', 'status','id_user'], 'required'],
            [['id', 'id_user', 'pembangunan_id'], 'integer'],
            [['deskripsi', 'status'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['foto'], 'image', 'extensions' => 'png, jpg, jpeg'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pembangunan::className(), 'targetAttribute' => ['pembangunan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'foto' => 'Foto',
            'deskripsi' => 'Deskripsi',
            'id_user' => 'User ID',
            'pembangunan_id' => 'Pembangunan ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    public function getUser()
    {
        return $this->hasOne(UserAdmin::className(), ['id' => 'id_user']);
    }
    public function getPembangunan()
    {
        return $this->hasOne(Pembangunan::className(), ['id' => 'pembangunan_id']);
    }
      public $user_id;
}
