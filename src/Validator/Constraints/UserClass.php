<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 *
 * Constraint for or App\Entity\User
 */
class UserClass extends Constraint
{
    public $message = 'Значение нового пароля не должно совпадать с текущим.';

    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}
