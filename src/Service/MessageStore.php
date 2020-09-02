<?php

namespace App\Service;

class MessageStore
{
    public static function getWarningChangePassword(): array
    {
        return [
            'type' => 'warning',
            'msg' => 'В целях безопасности, вам необходимо изменить пароль.'
                . 'Пожалуйста, пройдите по <b><a href="/profile/security">ссылке</a></b>.'
        ];
    }
}
