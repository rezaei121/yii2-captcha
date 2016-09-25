<?php

namespace developit\captcha;
use Yii;
use yii\web\Response;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
/**
 * This is just an example.
 */
class CaptchaAction extends \yii\captcha\CaptchaAction
{
    public function run()
    {
        return "Hello!";
    }
}
