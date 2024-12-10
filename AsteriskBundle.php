<?php

namespace WebleXX\Bundle\AsteriskBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use WebleXX\Bundle\AsteriskBundle\DependencyInjection\Compiler\EventHandlerPass;

class AsteriskBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new EventHandlerPass());
    }
}
