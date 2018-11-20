<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\travel;

class TravelFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        
        for($i=1;$i<=10;$i++){
            $PlaceToVisit=array("place saint marc" ,"rialto");
            $article = new travel();
            $article->setCategory("Culinaire");
            $article->setDestination("italy");
            $article->setResume("les meilleurs spaghettis ever!!");
            $article->setPlacesToVisit($PlaceToVisit);
            $article->setDateTime(new \DateTime());
            
            $manager->persist($article);

        }

        for($i=10;$i<=20;$i++){
            $PlaceToVisit=array("Tanger" ,"Agadir");
            $article = new travel();
            $article->setCategory("Aventure");
            $article->setDestination("Maroc");
            $article->setResume("jetski baby!");
            $article->setPlacesToVisit($PlaceToVisit);
            $article->setDateTime(new \DateTime());
            
            $manager->persist($article);
        }

        $manager->flush();
    }
}
