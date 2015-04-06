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
class Audit implements Aspect
{
	private $auditService;

	public function __construct($auditService)
	{
		$this->auditService = $auditService;
	}
	/**
	 * @Before("@execution(Application\AOP\Pointcut\Audit)", order=128)
	 *
	 * @param MethodInvocation $inv
	 * @return mixed
	 * @throws \Exception
	 */
	public function beforeAudit(MethodInvocation $inv)
	{
//		$audit = new Audit();
//		$this->auditService->
		echo 'audit aspect<br>';
	}
}
