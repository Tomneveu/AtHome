<?php

namespace App\Repository;

use App\Entity\Prestations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Prestations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Prestations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Prestations[]    findAll()
 * @method Prestations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrestationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Prestations::class);
    }

    // /**
    //  * @return Prestations[] Returns an array of Prestations objects
    //  */

    public function findByName($name)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.name = :val')
            ->setParameter('val', $name)
            ->orderBy('p.id', 'ASC')
            // ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findByprestataire($prestataire)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.prestataire = :val')
            ->setParameter('val', $prestataire)
            ->orderBy('p.id', 'ASC')
            // ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?Prestations
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