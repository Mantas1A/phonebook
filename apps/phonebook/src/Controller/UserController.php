<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;

class UserController extends AbstractController
{
    /**
     * @Route("api/user", name="user")
     */
    public function index(UserRepository $userRepository)
    {
        $users = $userRepository->findAll();

        $encoders = [new XmlEncoder(), new JsonEncoder()];

        $serializer = new Serializer([new GetSetMethodNormalizer(), new ArrayDenormalizer()], $encoders);

        $json = $serializer->serialize($users, 'json', [AbstractNormalizer::IGNORED_ATTRIBUTES => ['password','share', 'salt']]);

        return new Response($json);
    }

    /**
     * @Route("api/users/{id}", name="user_show", methods={"GET"})
     */
    public function show(User $user)
    {
        $displayUser = array();
        $displayUser['id'] = $user->getId();
        $displayUser['name'] = $user->getName();
        $displayUser['role'] = $user->getRoles();

        return new JsonResponse($displayUser);
    }

}
