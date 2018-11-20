<?php

namespace App\Repository;

use App\Entity\travel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method travel|null find($id, $lockMode = null, $lockVersion = null)
 * @method travel|null findOneBy(array $criteria, array $orderBy = null)
 * @method travel[]    findAll()
 * @method travel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CriticalArticlesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, travel::class);
    }

//    /**
//     * @return travel[] Returns an array of travel objects
//     */
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
    public function findOneBySomeField($value): ?travel
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
