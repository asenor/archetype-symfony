<?php

namespace Archetype\DemoBundle\Repository;

use Doctrine\ORM\EntityManager;

class DemoRepository
{
    protected $entity_manager;

    public function __construct(EntityManager $entity_manager)
    {
        $this->entity_manager = $entity_manager;
    }

    public function findDemos()
    {
        $builder = $this->entity_manager->createQueryBuilder();
        $query = $builder
            ->select('demo')
            ->from('ArchetypeDemoBundle:Demo', 'demo')
            ->getQuery();

        return $query->getResult();
    }
}