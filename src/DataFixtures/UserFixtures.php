<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    private $users = [
        [
            'username' => 'a.e.egorov',
            'firstName' => 'Александр',
            'lastName' => 'Егоров',
            'roles' => ['ROLE_ADMIN'],
            'password' => 'Test!@#456'
        ],
        [
            'username' => 'u.e.egorov',
            'firstName' => 'Александр',
            'lastName' => 'Егоров',
            'roles' => ['ROLE_USER'],
            'password' => 'Test!@#456'
        ],
        [
            'username' => 'g.e.egorov',
            'firstName' => 'Александр',
            'lastName' => 'Егоров',
            'roles' => ['ROLE_GUEST'],
            'password' => 'Test!@#456'
        ]
    ];

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        foreach ($this->users as $item) {
            $user = new User();
            $user->setUsername($item['username']);
            $user->setFirstName($item['firstName']);
            $user->setLastName($item['lastName']);
            $user->setRoles($item['roles']);
            $user->setPasswordStatus(0);
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                $item['password']
            ));

            $manager->persist($user);
        }

        $manager->flush();
    }
}
