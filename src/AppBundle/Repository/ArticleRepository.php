<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr as Expr;
use AppBundle\Entity\Comment;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends \Doctrine\ORM\EntityRepository
{
    function findAllByArticleId($id){
        $qb = $this->createQuerybuilder('article')
        ->select('article', 'comment', 'user')
        ->innerJoin('article.comments', 'comment')
        ->innerJoin('article.user', 'user')
        ->andWhere('article.id = :id')
        ->setParameter(':id',$id)
        ->orderBy('article.id','asc');
        return $qb->getQuery()->getSingleResult();
    }
}
