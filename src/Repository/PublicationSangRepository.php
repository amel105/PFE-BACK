<?php

namespace App\Repository;

use App\Entity\PublicationSang;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PublicationSang|null find($id, $lockMode = null, $lockVersion = null)
 * @method PublicationSang|null findOneBy(array $criteria, array $orderBy = null)
 * @method PublicationSang[]    findAll()
 * @method PublicationSang[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PublicationSangRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PublicationSang::class);
    }

    // /**
    //  * @return PublicationSang[] Returns an array of PublicationSang objects
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
    public function findOneBySomeField($value): ?PublicationSang
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
