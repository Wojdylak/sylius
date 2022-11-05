<?php

declare(strict_types=1);

namespace App\Entity\Shipping;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Shipping\Model\ShippingCategory as BaseShippingCategory;

class ShippingCategory extends BaseShippingCategory
{
}
