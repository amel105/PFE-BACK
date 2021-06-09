<?php

namespace App\Repository;

use App\Entity\ReclamationSang;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReclamationSang|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReclamationSang|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReclamationSang[]    findAll()
 * @method ReclamationSang[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationSangRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReclamationSang::class);
    }

    // /**
    //  * @return ReclamationSang[] Returns an array of ReclamationSang objects
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
    public function findOneBySomeField($value): ?ReclamationSang
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
