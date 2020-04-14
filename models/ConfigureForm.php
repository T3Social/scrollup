<?php

namespace humhub\modules\scrollup\models;

use Yii;
use yii\base\Model;

/**
 * ConfigureForm defines the configurable fields.
 */
class ConfigureForm extends Model
{

    public $position;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['position', 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'position' => 'Position:'
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'position' => 'e.g: <code>left: 30px;</code> or <code>right: 30px;</code>',
        ];
    }

    public function loadSettings()
    {
        
        $this->position = Yii::$app->getModule('scrollup')->settings->get('position');

        return true;
    }

    public function save()
    {

        Yii::$app->getModule('scrollup')->settings->set('position', $this->position);

        return true;
    }

}