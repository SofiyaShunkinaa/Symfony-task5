<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Faker\Factory as FakerFactory;

class UsersController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        $faker = FakerFactory::create();
        $users = [];

        for($i=0; $i<10; $i++){
            $users[$i]['name'] = $faker->name;
            $users[$i]['email'] = $faker->email;
            $users[$i]['address'] = $faker->address;
        }

        return $this->render('fake_users.html.twig', [
            'users' => $users,
        ]);
    }
}
