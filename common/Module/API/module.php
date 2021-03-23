<?php

namespace common\Module\API;

/**
 * API module definition class
 */
class module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'common\Module\API\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        \Yii::$app->request->enableCsrfValidation = false;

        // custom initialization code goes here
    }
}
