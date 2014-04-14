<?php

namespace JasonRoman\Bundle\FlotBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @author Jason Roman <j@jayroman.com>
 */
class JasonRomanFlotBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }
}
