<?php

declare(strict_types=1);

namespace App\Entity\User;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\User\Model\UserOAuth as BaseUserOAuth;

class UserOAuth extends BaseUserOAuth
{
}
