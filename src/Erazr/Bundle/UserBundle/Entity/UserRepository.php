<?php

namespace Erazr\Bundle\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository
{
	public function findAllUserBySearch($string, $limit = null)
    {
       $result = $this->createQueryBuilder('u')
		    ->orderBy('u.username', 'asc')
		    ->where('u.username LIKE :string')
		    ->setParameter('string', '%'.$string.'%');

		    if(is_numeric($limit)){
		    	$result->setMaxResults($limit);
		    }

		    return $result->getQuery()->getResult();


    }
}
