<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/profile")
 */
class ProfileController extends AbstractController
{
    /**
     * @Route("/info", name="info")
     */
    public function info()
    {
        $em = $this->getDoctrine()->getManager();

        $username = $this->getUser()->getUsername();
        $user = $em->getRepository(User::class)->findOneBy(['username' => $username]);

        return $this->render('profile/info.html.twig', [
            'user' => $user,
        ]);
    }
}
