<?php

namespace App\Repository;

use App\Entity\Kegiatan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Kegiatan|null find($id, $lockMode = null, $lockVersion = null)
 * @method Kegiatan|null findOneBy(array $criteria, array $orderBy = null)
 * @method Kegiatan[]    findAll()
 * @method Kegiatan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KegiatanRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Kegiatan::class);
    }

    // /**
    //  * @return Kegiatan[] Returns an array of Kegiatan objects
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
    public function findOneBySomeField($value): ?Kegiatan
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
