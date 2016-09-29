<?php

namespace developit\captcha;

class CaptchaAction extends \yii\captcha\CaptchaAction
{
    public $fontFile = '@developit/captcha/font/LithosPro-Regular.otf';
    public $foreColor = 0x999999;
    public $type = 'default'; // numbers & letters

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

        $str = '0123456789bcdfghjklmnpqrstvwxyz';
        $code = '';
        for ($i = 0; $i < $length; $i++) {
            switch ($this->type)
            {
                case 'numbers':
                    $code .= $str[mt_rand(0, 9)];
                    break;
                case 'letters':
                    $code .= $str[mt_rand(10, 30)];
                    break;
                default:
                    $code .= $str[mt_rand(0, 30)];
            }
        }

        return $code;
    }
}
