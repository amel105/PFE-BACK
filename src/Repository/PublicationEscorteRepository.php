<?php

namespace App\Repository;

use App\Entity\PublicationEscorte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PublicationEscorte|null find($id, $lockMode = null, $lockVersion = null)
 * @method PublicationEscorte|null findOneBy(array $criteria, array $orderBy = null)
 * @method PublicationEscorte[]    findAll()
 * @method PublicationEscorte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PublicationEscorteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PublicationEscorte::class);
    }

    // /**
    //  * @return PublicationEscorte[] Returns an array of PublicationEscorte objects
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
    public function findOneBySomeField($value): ?PublicationEscorte
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
