<?php

// src/AppBundle/DataFixtures/ORM/LoadUserData.php

namespace Yoda\EventBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Yoda\EventBundle\Entity\Event;

class LoadEvents implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
       $event1 = new Event();
        $event1->setName('Darth Vader');
        $event1->setLocation('Some place');
        $event1->setTime(new \DateTime('tomorrow noon'));
        $event1->setDetails('HAHAHAH');
        $manager->persist($event1);

        $event2 = new Event();
        $event2->setName('D222222arth Vader');
        $event2->setLocation('Som2222e place');
        $event2->setTime(new \DateTime('tomorrow noon'));
        $event2->setDetails('HsdasdasdAHAHAH');
        $manager->persist($event2);

        $manager->flush();
    }
}