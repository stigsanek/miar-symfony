<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PasswordChangeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('currentPassword', PasswordType::class, [
                'label' => 'Текущий пароль',
                'help' => 'Ваш действующий пароль'
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Значения полей нового пароля должны совпадать.',
                'first_options' => [
                    'label' => 'Новый пароль',
                    'help' => 'Пароль должен быть длиной от 8 символов, состоять из цифр, '
                        . 'латинских прописных и строчных букв, а также специальных символов (!@#$%^&*)'
                ],
                'second_options' => [
                    'label' => 'Повторите пароль',
                    'help' => 'Подтвердите ваш новый пароль'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
