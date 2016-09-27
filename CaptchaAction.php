<?php

namespace developit\captcha;

class CaptchaAction extends \yii\captcha\CaptchaAction
{
    public $minLength = 4;
    public $maxLength = 9;
    public $fontFile = '@yii/captcha/SpicyRice.ttf';
    public $foreColor = 0x999999;

    protected function generateVerifyCode()
    {
        if ($this->minLength > $this->maxLength) {
            $this->maxLength = $this->minLength;
        }
        if ($this->minLength < 4) {
            $this->minLength = 4;
        }
        if ($this->maxLength > 9) {
            $this->maxLength = 9;
        }
        $length = mt_rand($this->minLength, $this->maxLength);
        $numbers = '0123456789';
        $code = '';
        for ($i = 0; $i < $length; $i++) {
            $code .= $numbers[mt_rand(0, 9)];
        }

        return $code;
    }
}
