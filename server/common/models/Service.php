<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property string $date
 * @property string $duration
 * @property int $petId
 * @property int $walkerId
 *
 * @property Pet $pet
 * @property Walker $walker
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'duration', 'petId', 'walkerId'], 'required'],
            [['date'], 'string'],
            [['duration'], 'safe'],
            [['petId', 'walkerId'], 'integer'],
            [['petId'], 'exist', 'skipOnError' => true, 'targetClass' => Pet::className(), 'targetAttribute' => ['petId' => 'id']],
            [['walkerId'], 'exist', 'skipOnError' => true, 'targetClass' => Walker::className(), 'targetAttribute' => ['walkerId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'duration' => 'Duration',
            'petId' => 'Pet ID',
            'walkerId' => 'Walker ID',
        ];
    }

    /**
     * Gets query for [[Pet]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPet()
    {
        return $this->hasOne(Pet::className(), ['id' => 'petId']);
    }

    /**
     * Gets query for [[Walker]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWalker()
    {
        return $this->hasOne(Walker::className(), ['id' => 'walkerId']);
    }
}
