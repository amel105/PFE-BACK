<?php

namespace App\Repository;

use App\Entity\DonationEscorte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DonationEscorte|null find($id, $lockMode = null, $lockVersion = null)
 * @method DonationEscorte|null findOneBy(array $criteria, array $orderBy = null)
 * @method DonationEscorte[]    findAll()
 * @method DonationEscorte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DonationEscorteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DonationEscorte::class);
    }

    // /**
    //  * @return DonationEscorte[] Returns an array of DonationEscorte objects
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
    public function findOneBySomeField($value): ?DonationEscorte
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
