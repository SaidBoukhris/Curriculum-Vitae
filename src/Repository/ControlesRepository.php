<?php

namespace App\Repository;

use App\Entity\Controles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Controles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Controles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Controles[]    findAll()
 * @method Controles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ControlesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Controles::class);
    }

    // /**
    //  * @return Controles[] Returns an array of Controles objects
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
    public function findOneBySomeField($value): ?Controles
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
