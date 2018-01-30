<?php

namespace Swoft\Rpc\Bootstrap;

use Swoft\Bean\Annotation\BootBean;
use Swoft\Core\BootBeanIntereface;
use Swoft\Rpc\Packer\ServicePacker;

/**
 * The core bean of rpc
 *
 * @BootBean()
 */
class CoreBean implements BootBeanIntereface
{
    /**
     * @return array
     */
    public function beans()
    {
        return [
            'servicePacker'     => [
                'class'   => ServicePacker::class,
            ]
        ];
    }
}