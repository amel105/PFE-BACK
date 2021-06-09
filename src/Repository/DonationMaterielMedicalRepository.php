<?php

namespace App\Repository;

use App\Entity\DonationMaterielMedical;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DonationMaterielMedical|null find($id, $lockMode = null, $lockVersion = null)
 * @method DonationMaterielMedical|null findOneBy(array $criteria, array $orderBy = null)
 * @method DonationMaterielMedical[]    findAll()
 * @method DonationMaterielMedical[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DonationMaterielMedicalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DonationMaterielMedical::class);
    }

    // /**
    //  * @return DonationMaterielMedical[] Returns an array of DonationMaterielMedical objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DonationMaterielMedical
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
