<?php
// src/DataFixtures/UserFixtures.php
namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('admin');
        $user->setPassword('$2y$12$kl0pCIKa2SgOzT/FE26whOaKxiMeyu1LLanhzgNyhkv8nYpIw.lXu');
        $user->setEmail('admin@test.com');
        $user->setRoles('ROLE_ADMIN');
        
        $manager->persist($user);

        $manager->flush();
    }
}