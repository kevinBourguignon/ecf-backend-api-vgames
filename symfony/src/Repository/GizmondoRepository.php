<?php

namespace App\Repository;

use App\Entity\Gizmondo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Gizmondo>
 *
 * @method Gizmondo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gizmondo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gizmondo[]    findAll()
 * @method Gizmondo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GizmondoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gizmondo::class);
    }

//    /**
//     * @return Gizmondo[] Returns an array of Gizmondo objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Gizmondo
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
