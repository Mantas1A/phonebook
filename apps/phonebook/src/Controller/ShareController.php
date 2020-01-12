<?php

namespace App\Controller;

use App\Entity\Phone;
use App\Entity\Share;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShareController extends AbstractController
{

    /**
     * @Route("/share_delete/{id}", name="share_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Share $share): Response
    {
        if ($this->isCsrfTokenValid('delete'.$share->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($share);
            $entityManager->flush();
        }

        return $this->redirectToRoute('phone_index');
    }


    /**
     * @Route("/share", name="share", methods={"GET","POST"})
     */
    public function share(Request $request): Response
    {
        $share = new Share();
        $form = $this->createFormBuilder(['message' => 'Share this contact with:'])
            ->add('name')->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $data = $form->getData();
            $user = $this->getDoctrine()
                ->getRepository(User::class)
                ->findOneBy(['name' => $data['name']]);
            if (!$user)
            {
                $this->addFlash("error", "User with that name does not exist.");
            }else{
                $share->setPhone($this->getDoctrine()->getRepository(Phone::class)->find($_GET['id']));
                $share->setUser($this->getDoctrine()->getRepository(User::class)->find($user->getId()));

                $testPhone = $this->getDoctrine()->getRepository(Share::class)->findOneBy(['phone_id' => $_GET['id'], 'user_id' => $user->getId()]);


                if($share->getUserId() == $share->getPhone()->getUserId()){
                    $this->addFlash("error", "You can not share your own contact with yourself");
                }else{

                    if($testPhone){
                        $this->addFlash("error", "You are allready sharing this contact with this user");
                    }else{

                        $entityManager->persist($share);
                        $entityManager->flush();

                        return $this->redirectToRoute('phone_index');
                    }
                }
            }
        }

        return $this->render('share/new.html.twig', [
            'share' => $share,
            'form' => $form->createView(),
        ]);


    }

}
