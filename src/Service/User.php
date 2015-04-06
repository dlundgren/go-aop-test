<?php
namespace Application\Service;

use Application\Aop\Pointcut\Authorization;
use Application\Aop\Pointcut\Audit;

/**
 * Class Authorization
 *
 * @package Application\Aspect
 */
class User
{

	/**
	 * @Authorization(privilege="UPDATE")
	 * @Audit
	 *
	 * @param array $params
	 * @return mixed
	 */
	public function findAll(array $params = [])
	{
		return 'woot';
	}
}
