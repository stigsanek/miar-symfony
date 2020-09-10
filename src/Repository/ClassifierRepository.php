<?php

namespace App\Repository;

use App\Entity\Classifier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Classifier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Classifier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Classifier[]    findAll()
 * @method Classifier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClassifierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Classifier::class);
    }

    // /**
    //  * @return Classifier[] Returns an array of Classifier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Classifier
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
