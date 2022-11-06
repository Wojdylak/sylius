<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

class Product extends BaseProduct
{
    const COLOR_RED = 'RED';
    const COLOR_BLUE = 'BLUE';
    const COLOR_GREEN = 'GREEN';

    protected string $color;

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }

    /**
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string|null $color
     * @return Product
     */
    public function setColor(?string $color): Product
    {
        $this->color = $color;
        return $this;
    }
}
