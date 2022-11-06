<?php

namespace App\Form\Extension;

use App\Entity\Product\Product;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'color',
                ChoiceType::class,
                [
                    'label' => 'color.label',
                    'choices' => [
                        Product::COLOR_BLUE,
                        Product::COLOR_GREEN,
                        Product::COLOR_RED,
                    ],
                    'choice_label' => function ($choice, $key, $value) {
                        return 'colors.'.strtolower($value);
                    },
                ]
            );
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
