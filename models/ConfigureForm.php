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

    public $color;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['position', 'required'],
            ['color', 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'position' => 'Position:',
            'color' => 'Color:'
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'position' => 'e.g: <code>left: 30px;</code> or <code>right: 30px;</code>',
            'color' => 'e.g <code>#000000</code> or in some case just the name of the color.'
        ];
    }

    public function loadSettings()
    {

        $this->position = Yii::$app->getModule('scrollup')->settings->get('position');

        $this->color = Yii::$app->getModule('scrollup')->settings->get('color');

      return true;
    }

    public function save()
    {

        Yii::$app->getModule('scrollup')->settings->set('position', $this->position);

        Yii::$app->getModule('scrollup')->settings->set('color', $this->color);

        return true;
    }

}
