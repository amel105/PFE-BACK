<?php

namespace App\Repository;

use App\Entity\ReclamationEscorte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReclamationEscorte|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReclamationEscorte|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReclamationEscorte[]    findAll()
 * @method ReclamationEscorte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationEscorteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReclamationEscorte::class);
    }

    // /**
    //  * @return ReclamationEscorte[] Returns an array of ReclamationEscorte objects
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
    public function findOneBySomeField($value): ?ReclamationEscorte
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
