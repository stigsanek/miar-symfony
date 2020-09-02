<?php

namespace App\Service;

class MessageStore
{
    public static function getWarningChangePassword(): array
    {
        return [
            'warning',
            'В целях безопасности, вам необходимо изменить пароль. '
                . 'Пожалуйста, пройдите по <b><a href="/profile/security">ссылке</a></b>.'
        ];
    }

    public static function getSuccessPasswordChange(): array
    {
        return [
            'success',
            'Пароль успешно изменен.'
        ];
    }

    public static function getDangerForm(): array
    {
        return [
            'danger',
            'Пожалуйста, исправьте ошибки, указанные ниже.'
        ];
    }
}
