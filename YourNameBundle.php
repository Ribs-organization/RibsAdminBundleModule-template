<?php

namespace PiouPiou\YourNameBundle;

use PiouPiou\YourNameBundle\DependencyInjection\YourNameExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class YourNameBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new YourNameExtension();
    }
}
