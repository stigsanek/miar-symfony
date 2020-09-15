<?php

namespace App\Repository;

use App\Entity\Bell;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Bell|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bell|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bell[]    findAll()
 * @method Bell[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BellRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bell::class);
    }

    // /**
    //  * @return Bell[] Returns an array of Bell objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bell
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
