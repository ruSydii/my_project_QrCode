<?php

namespace App\Repository;

use App\Entity\KegiatanAbsensi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method KegiatanAbsensi|null find($id, $lockMode = null, $lockVersion = null)
 * @method KegiatanAbsensi|null findOneBy(array $criteria, array $orderBy = null)
 * @method KegiatanAbsensi[]    findAll()
 * @method KegiatanAbsensi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KegiatanAbsensiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, KegiatanAbsensi::class);
    }

    // /**
    //  * @return KegiatanAbsensi[] Returns an array of KegiatanAbsensi objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?KegiatanAbsensi
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
