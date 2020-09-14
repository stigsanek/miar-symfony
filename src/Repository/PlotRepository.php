<?php

namespace App\Repository;

use App\Entity\Plot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Plot|null find($id, $lockMode = null, $lockVersion = null)
 * @method Plot|null findOneBy(array $criteria, array $orderBy = null)
 * @method Plot[]    findAll()
 * @method Plot[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlotRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Plot::class);
    }

    /**
     * @return Plot[] Returns an array of Plot objects
     */
    public function findAllWithJoin()
    {
        return $this->getEntityManager()->createQueryBuilder()->select(
            'p.id, p.identifier, p.announcementText, p.permittedUse, p.permittedUseDoc, p.address, p.locality, '
                . 'p.price, p.area, p.unitPrice, p.cadastralNumber, p.urlLink, p.placementDate, p.relevanceDate, '
                . 'p.screenshotLink, p.commentAttribute, p.commentProcessing, p.commentGeneral, p.processingDate'
        )
            ->addSelect(
                'a.name attribute, b.name bell, ca.name category, cl.name classifier, coe.name eCommunic, '
                    . 'cow.name wCommunic, cog.name gCommunic, coh.name hCommunic, cor.name rCommunic, '
                    . 'd.name district, so.name source, st.name state, u.lastName user, lsu.lastName lastSaveUser'
            )
            ->from('App\Entity\Plot', 'p')
            ->leftJoin('App\Entity\Attribute', 'a', 'WITH', 'p.attribute = a.id')
            ->leftJoin('App\Entity\Bell', 'b', 'WITH', 'p.bell = b.id')
            ->leftJoin('App\Entity\Category', 'ca', 'WITH', 'p.category = ca.id')
            ->leftJoin('App\Entity\Classifier', 'cl', 'WITH', 'p.classifier = cl.id')
            ->leftJoin('App\Entity\Communication', 'coe', 'WITH', 'p.electricityCommunication = coe.id')
            ->leftJoin('App\Entity\Communication', 'cow', 'WITH', 'p.waterCommunication = cow.id')
            ->leftJoin('App\Entity\Communication', 'cog', 'WITH', 'p.gasCommunication = cog.id')
            ->leftJoin('App\Entity\Communication', 'coh', 'WITH', 'p.heatingCommunication = coh.id')
            ->leftJoin('App\Entity\Communication', 'cor', 'WITH', 'p.roadCommunication = cor.id')
            ->leftJoin('App\Entity\District', 'd', 'WITH', 'p.district = d.id')
            ->leftJoin('App\Entity\Source', 'so', 'WITH', 'p.source = so.id')
            ->leftJoin('App\Entity\State', 'st', 'WITH', 'p.state = st.id')
            ->leftJoin('App\Entity\User', 'u', 'WITH', 'p.performerUser = u.id')
            ->leftJoin('App\Entity\User', 'lsu', 'WITH', 'p.lastSavePerformerUser = lsu.id')
            ->orderBy('p.id');
    }

    // /**
    //  * @return Plot[] Returns an array of Plot objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Plot
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
