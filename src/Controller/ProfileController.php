<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\PasswordChangeType;
use App\Service\MessageStore;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/profile")
 */
class ProfileController extends AbstractController
{
    /**
     * @Route("/info", name="get_info")
     */
    public function getInfo()
    {
        return $this->render('profile/info.html.twig', [
            'user' => $this->getCurrentUser(),
        ]);
    }

    /**
     * @Route("/security", name="change_password")
     */
    public function changePassword(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = $this->getCurrentUser();

        $form = $this->createForm(PasswordChangeType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            $user->setPasswordStatus(1);

            $this->getDoctrine()->getManager()->flush();

            list($flashType, $flashMsg) = MessageStore::getSuccessPasswordChange();
            $this->addFlash($flashType, $flashMsg);
        }

        if ($form->isSubmitted() && !$form->isValid()) {
            list($flashType, $flashMsg) = MessageStore::getDangerForm();
            $this->addFlash($flashType, $flashMsg);
        }

        return $this->render('profile/security.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    private function getCurrentUser(): object
    {
        $em = $this->getDoctrine()->getManager();
        $username = $this->getUser()->getUsername();

        return $em->getRepository(User::class)->findOneBy(['username' => $username]);
    }
}
