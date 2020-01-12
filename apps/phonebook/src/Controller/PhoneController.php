<?php

namespace App\Controller;

use App\Entity\Phone;
use App\Entity\Share;
use App\Entity\User;
use App\Form\PhoneType;
use App\Form\ShareType;
use App\Repository\PhoneRepository;
use App\Repository\ShareRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @IsGranted("IS_AUTHENTICATED_FULLY")
 * @Route("/phone")
 */
class PhoneController extends AbstractController
{
    /**
     * @Route("/", name="phone_index", methods={"GET"})
     */
    public function index(PhoneRepository $phoneRepository, ShareRepository $shareRepository, Security $security): Response
    {
        $user = $security->getUser();

        $phones = $phoneRepository->findBy(['user_id' => $user->getId()]);
        $shared = $shareRepository->findBy(['user_id' => $user->getId()]);
        $sharedPhones = [];

        foreach ($shared as $share)
        {
            $phone = $phoneRepository->findOneBy(['id' => $share->getPhoneId()]);
            array_push($sharedPhones, $phone);
        }

        return $this->render('phone/index.html.twig', [
            'phones' => $phones, 'shared' => $sharedPhones
        ]);
    }

    /**
     * @Route("/new", name="phone_new", methods={"GET","POST"})
     */
    public function new(Request $request, Security $security): Response
    {
        $user = $security->getUser();

        $phone = new Phone();
        $form = $this->createForm(PhoneType::class, $phone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $phone->setUserId($user->getId());
            $entityManager->persist($phone);
            $entityManager->flush();

            return $this->redirectToRoute('phone_index');
        }

        return $this->render('phone/new.html.twig', [
            'phone' => $phone,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/{id}", name="phone_show", methods={"GET"})
     */
    public function show(Phone $phone, Security $security): Response
    {
        $user = $security->getUser();

        if ($user->getId() == $phone->getUserId()) {
            return $this->render('phone/show.html.twig', [
                'phone' => $phone,
            ]);
        } else {
            return new Response('Cant touch this');
            //  return $this->createAccessDeniedException();
        }
    }

    /**
     * @Route("/{id}/edit", name="phone_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Phone $phone, Security $security): Response
    {
        $user = $security->getUser();

        if ($user->getId() == $phone->getUserId()) {
            $form = $this->createForm(PhoneType::class, $phone);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $this->getDoctrine()->getManager()->flush();

                return $this->redirectToRoute('phone_index');
            }

            return $this->render('phone/edit.html.twig', [
                'phone' => $phone,
                'form' => $form->createView(),
            ]);
        } else {
            return new Response('Cant touch this');
            //  return $this->createAccessDeniedException();
        }

    }

    /**
     * @Route("/{id}", name="phone_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Phone $phone, Security $security): Response
    {
        $user = $security->getUser();

        if ($user->getId() == $phone->getUserId()) {
            if ($this->isCsrfTokenValid('delete'.$phone->getId(), $request->request->get('_token'))) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($phone);
                $entityManager->flush();
            }

            return $this->redirectToRoute('phone_index');
        } else {
            return new Response('Cant touch this');
            //  return $this->createAccessDeniedException();
        }

    }


}
