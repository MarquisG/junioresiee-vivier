<?php

namespace Vivier\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class VivierUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
