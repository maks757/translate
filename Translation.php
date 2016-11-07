<?php
/**
 * Created by xalbert.einsteinx
 * https://www.einsteinium.pro
 * Date: 14.05.2016
 * Time: 14:20
 */

namespace maks757\translate;


class Translation extends \yii\base\Module
{
    public $controllerNamespace = 'maks757\translate\controllers';
    public $defaultRoute = 'message';

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        $this->registerTranslations();
    }

    public function registerTranslations() {
        \Yii::$app->i18n->translations['translation/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@vendor/black-lamp/blcms-translate/messages',
            'fileMap' => [
                'translation/main' => 'main.php',
                'translation/message' => 'message.php',
                'translation/source_message' => 'source_message.php',
            ],
        ];
    }

    public static function t($category, $message, $params = [], $language = null) {
        return \Yii::t('translation/' . $category, $message, $params, $language);
    }
}