<?php

namespace App\Repository;

use App\Entity\MasterKaryawan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MasterKaryawan|null find($id, $lockMode = null, $lockVersion = null)
 * @method MasterKaryawan|null findOneBy(array $criteria, array $orderBy = null)
 * @method MasterKaryawan[]    findAll()
 * @method MasterKaryawan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MasterKaryawanRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MasterKaryawan::class);
    }

    // /**
    //  * @return MasterKaryawan[] Returns an array of MasterKaryawan objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MasterKaryawan
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
