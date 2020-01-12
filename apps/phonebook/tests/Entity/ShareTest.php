<?php

namespace App\Tests\Entity;

use App\Entity\Phone;
use App\Entity\Share;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class ShareTest extends TestCase
{

    public function testThatWeCanGetUserId()
    {
        $share = new Share();

        $share->setUserId(2);

        $this->assertEquals($share->getUserId(), 2);
    }

    public function testSharePhoneDependency()
    {
        $share = new Share();
        $phone = new Phone();

        $phone->setName('Kestas');

        $share->setPhone($phone);

        $this->assertEquals($share->getPhone()->getName(), 'Kestas');
    }

    public function testUserPhoneDependency()
    {
        $share = new Share();
        $user = new User();

        $user->setName('Juozas');

        $share->setUser($user);

        $this->assertEquals($share->getUser()->getName(), 'Juozas');
    }
}
