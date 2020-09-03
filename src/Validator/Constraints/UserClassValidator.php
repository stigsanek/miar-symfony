<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validator for App\Entity\User
 */
class UserClassValidator extends ConstraintValidator
{
    public function validate($user, Constraint $constraint)
    {
        if ($user->getPlainPassword() && $user->getPlainPassword() === $user->getCurrentPassword()) {
            $this->context->buildViolation($constraint->message)
                ->atPath('plainPassword')
                ->addViolation();
        }
    }
}
