<?php

namespace App\Repository;

use App\Entity\Don;
use DateTime;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Don|null find($id, $lockMode = null, $lockVersion = null)
 * @method Don|null findOneBy(array $criteria, array $orderBy = null)
 * @method Don[]    findAll()
 * @method Don[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DonRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Don::class);
    }

//    /**
//     * @return Don[] Returns an array of Don objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Don
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function percentage($projet): ?Don{
        return $this->createQueryBuilder('d')
        ->join('d.projet', 'p')
        ->addselect('SUM(d.montant)')
        ->andWhere('d.projet = :projet')
        ->setParameter('projet', $projet)
        ->getQuery()
        ->getOneOrNullResult()
        ;
    }
    public function findActive(DateTime $date)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.date > :date')
            ->setParameter('date', $date)
            ->getQuery()
            ->getResult();
    }
    public function findEleves($montant)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.montant > :montant')
            ->setParameter('montant', $montant)
            ->getQuery()
            ->getResult();
    }
}
