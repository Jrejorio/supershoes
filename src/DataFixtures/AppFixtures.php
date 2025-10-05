<?php

namespace App\DataFixtures;

use App\Entity\Shoe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
    
    private function loadShoes(ObjectManager $manager)
    {
        foreach ($this->getShoesData() as [$marque]) {
            $shoe = new Shoe();
            $shoe->setMarque($marque);
            $manager->persist($shoe);
        }
        $manager->flush();
    }
    
    private function getShoesData()
    {
        // tag = [name];
        yield ['Nike'];
        yield ['Adidas'];
        yield ['Asics'];
        yield ['Hoka'];
    }
    
}
