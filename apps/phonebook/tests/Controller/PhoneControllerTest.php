<?php

namespace App\Tests\Controller;

use App\Controller\PhoneController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PhoneControllerTest extends WebTestCase
{
    private $client = null;

    public function setUp()
    {
        $this->client = static::createClient();
        //$this->client->followRedirects(true);
        //$this->client->setMaxRedirects(10);
    }


    public function TestViewHomepage()
    {
        $client = static::createClient();

        $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }


    public function testLogin()
    {
        $crawler = $this->client->request('GET', '/login');

        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());

        $form = $crawler->selectButton('Sign in')->form();

        $form['name'] = 'test';
        $form['password'] = 'tester';

        $crawler = $this->client->submit($form);

        $crawler = $this->client->followRedirect();

        $this->assertCount(2, $crawler->filter('h2'));

    }

    public function login($crawler)
    {
        $form = $crawler->selectButton('Sign in')->form();

        $form['name'] = 'test';
        $form['password'] = 'tester';

        $crawler = $this->client->submit($form);

    }

    public function testShow()
    {
        $crawler = $this->client->request('GET', '/phone/1');

        $this->assertEquals(302, $this->client->getResponse()->getStatusCode());

        $crawler = $this->client->followRedirect();

        $this->login($crawler);

        $crawler = $this->client->followRedirect();

        $this->assertContains('Cant touch this', $this->client->getResponse()->getContent());
    }

    public function testNew()
    {
        $crawler = $this->client->request('GET', '/phone/new');

        $this->assertEquals(302, $this->client->getResponse()->getStatusCode());

        $crawler = $this->client->followRedirect();
        $this->login($crawler);
        $crawler = $this->client->followRedirect();

        $this->assertContains('Create new Phone', $this->client->getResponse()->getContent());

        $form = $crawler->selectButton('Save')->form();
        $form['phone[phone_number]'] ='3334333';
        $form['phone[name]'] = 'tester';

        $crawler = $this->client->submit($form);

        $crawler = $this->client->followRedirect();

        $this->assertContains('3334333', $this->client->getResponse()->getContent());
    }

    public function testEdit()
    {
        $crawler = $this->client->request('GET', 'login');
        $this->login($crawler);
        $this->client->followRedirect();

        $crawler = $this->client->clickLink('edit');

        $this->assertContains('Edit Phone', $this->client->getResponse()->getContent());

        $form = $crawler->selectButton('Update')->form();
        $form['phone[name]'] = 'test123';

        $crawler = $this->client->submit($form);

        $crawler = $this->client->followRedirect();

        $this->assertContains('test123', $this->client->getResponse()->getContent());
    }

    public function testDelete()
    {
        $crawler = $this->client->request('GET', 'login');
        $this->login($crawler);
        $crawler = $this->client->followRedirect();

        $crawler = $this->client->clickLink('edit');

        $this->assertContains('Edit Phone', $this->client->getResponse()->getContent());

//        $crawler = $this->client->clickLink('Delete');
        $form = $crawler->selectButton('Delete')->form();
        $crawler = $this->client->submit($form);

        $crawler = $this->client->followRedirect();

        $this->assertCount(2, $crawler->filter('small'));

    }
}
