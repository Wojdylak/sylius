<?php

declare(strict_types=1);

namespace App\Entity\Currency;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Currency\Model\ExchangeRate as BaseExchangeRate;

class ExchangeRate extends BaseExchangeRate
{
}
