<?php

declare(strict_types=1);

namespace App\Entity\Currency;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Currency\Model\Currency as BaseCurrency;

class Currency extends BaseCurrency
{
}
