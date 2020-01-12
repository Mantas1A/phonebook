<?php

namespace App\DataFixtures;

use App\Entity\Phone;
use App\Entity\Share;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {

        $user = new User();
        $user->setName('juozas');
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'juozas'
        ));

        $user1 = new User();
        $user1->setName('petras');
        $user1->setPassword($this->passwordEncoder->encodePassword(
            $user1,
            'petras'
        ));

        $phone = new Phone();
        $phone->setName('juozas');
        $phone->setPhoneNumber('868686555');
        $phone->setUserId(1);

        $phone1 = new Phone();
        $phone1->setName('petriukas');
        $phone1->setPhoneNumber('868686432');
        $phone1->setUserId(2);

        $phone2 = new Phone();
        $phone2->setName('petriuko mama');
        $phone2->setPhoneNumber('868686234');
        $phone2->setUserId(2);

        $share = new Share();
        $share->setPhone($phone);
        $share->setUser($user1);

        $share1 = new Share();
        $share1->setPhone($phone1);
        $share1->setUser($user);


        $manager->persist($user);
        $manager->persist($user1);
        $manager->persist($phone);
        $manager->persist($phone1);
        $manager->persist($phone2);
        $manager->persist($share);
        $manager->persist($share1);

        $manager->flush();
    }
}
