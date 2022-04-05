<?php

namespace common\models;
use yii\db\ActiveRecord;
use yii\web\Link;
use yii\web\Linkable;
use yii\helpers\Url;
use Yii;

/**
 * This is the model class for table "pet".
 *
 * @property int $id
 * @property string $name
 * @property int $ownerId
 *
 * @property Owner $owner
 * @property Service[] $services
 */
class Pet extends ActiveRecord implements Linkable
{
    public function getLinks()
    {
        return [
            Link::REL_SELF => ['http://www.walkmypet.loca/user/' . $this->id, 'http://admin.walkmypet.loca/user/' . $this->id],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'ownerId'], 'required'],
            [['ownerId'], 'integer'],
            [['name'], 'string', 'max' => 128],
            [['ownerId'], 'exist', 'skipOnError' => true, 'targetClass' => Owner::className(), 'targetAttribute' => ['ownerId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'ownerId' => 'Owner ID',
        ];
    }

    /**
     * Gets query for [[Owner]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(Owner::className(), ['id' => 'ownerId']);
    }

    /**
     * Gets query for [[Services]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['petId' => 'id']);
    }
}
