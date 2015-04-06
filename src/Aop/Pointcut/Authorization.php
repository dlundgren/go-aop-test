<?php
namespace Application\Aop\Pointcut;

use Doctrine\Common\Annotations\Annotation;

/**
 * Class Authorization
 *
 * @Annotation
 * @Target("METHOD")
 * @package Application\AOP\Pointcut
 */
class Authorization extends Annotation
{
	/** @var string */
	public  $privilege;
}
