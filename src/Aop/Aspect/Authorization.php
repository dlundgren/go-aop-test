<?php
namespace Application\Aop\Aspect;

use Doctrine\Common\Annotations\Reader;
use Go\Aop\Aspect;
use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\Before;

/**
 * Class Authorization
 *
 * @Annotation
 * @Target("METHOD")
 * @package Application\AOP\Aspect
 */
class Authorization implements Aspect
{
	private $annotationReader;

	public function __construct(Reader $annotationReader)
	{
		$this->annotationReader = $annotationReader;
	}

	/**
	 * @Before("@execution(Application\AOP\Pointcut\Authorization)", order=1)
	 *
	 * @param MethodInvocation $inv
	 * @return mixed
	 * @throws \Exception
	 */
	public function beforeAuthorization(MethodInvocation $inv)
	{
		// @TODO make this a trait
		$r = $this->annotationReader->getMethodAnnotation($inv->getMethod(), 'Application\AOP\Pointcut\Authorization');
		// @TODO this too
		$privilege = constant("Application\\Acl\\Permission::{$r->privilege}");
		echo "Acl aspect: $r->privilege<br>";

		if ($privilege === 'u') {
			return $inv->proceed();
		}
		throw new \Exception("Not allowed to access that object");
	}
}
