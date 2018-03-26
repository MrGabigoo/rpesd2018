<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PartieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PartieRepository extends EntityRepository
{
    public function getHistory($user)
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();

        $query = $qb
            ->select('p')
            ->from('AppBundle:Partie', 'p')
            ->where('p.joueur1 = ?1 OR p.joueur2 = ?1')
            ->orderBy('p.id', 'DESC')
            ->setMaxResults(10)
            ->setParameter(1, $user)
        ;

        return $query->getQuery()->getResult();
    }
}
