<?php

namespace AppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Description of User
 *
 * @author tomasz
 */
class User extends Bundle
{
    // use a child bundle
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
