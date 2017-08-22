<?php

namespace RcmActionButton;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class ModuleConfig
{
    /**
     * __invoke
     *
     * @return array
     */
    public function __invoke()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
