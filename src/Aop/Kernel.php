<?php
namespace Application\Aop;

use Go\Core\AspectContainer;
use Go\Core\AspectKernel;
use Application\Aop\Aspect;

class Kernel
	extends AspectKernel
{
	protected function configureAop(AspectContainer $container)
	{
		// @TODO DI
		$container->registerAspect(new Aspect\Authorization($container->get('aspect.annotation.reader')));
		$container->registerAspect(new Aspect\Audit($container->get('aspect.annotation.reader')));
//		$container->registerPointcut(new \Application\AOP\Pointcut\Authorization(), 'Authorization');
	}
}
