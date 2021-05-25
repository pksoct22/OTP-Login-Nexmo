<?php

namespace App;

class SendCode
{
    public static function sendCode($mobile){
        $code = rand(1111,9999);
        $nexmo = app('Nexmo\Client');
        $nexmo->message()->send([
            'to'=>'+91'.(int)$mobile,
            'from'=> 'Login OTP',
            'text'=>'Verify code: '.$code,
        ]);
        return $code;
    }

}
