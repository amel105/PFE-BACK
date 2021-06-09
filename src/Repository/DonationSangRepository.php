<?php

namespace App\Repository;

use App\Entity\DonationSang;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DonationSang|null find($id, $lockMode = null, $lockVersion = null)
 * @method DonationSang|null findOneBy(array $criteria, array $orderBy = null)
 * @method DonationSang[]    findAll()
 * @method DonationSang[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DonationSangRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DonationSang::class);
    }

    // /**
    //  * @return DonationSang[] Returns an array of DonationSang objects
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
    public function findOneBySomeField($value): ?DonationSang
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
