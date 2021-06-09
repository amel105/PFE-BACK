<?php

namespace App\Repository;

use App\Entity\ReclamationMaterielMedical;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReclamationMaterielMedical|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReclamationMaterielMedical|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReclamationMaterielMedical[]    findAll()
 * @method ReclamationMaterielMedical[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationMaterielMedicalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReclamationMaterielMedical::class);
    }

    // /**
    //  * @return ReclamationMaterielMedical[] Returns an array of ReclamationMaterielMedical objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ReclamationMaterielMedical
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
