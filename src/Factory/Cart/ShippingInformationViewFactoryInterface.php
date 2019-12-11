<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Factory\Cart;

use BitBag\SyliusVueStorefrontPlugin\View\Cart\ShippingInformationView;
use Sylius\Component\Core\Model\OrderInterface as SyliusOrderInterface;
use Sylius\Component\Core\Model\PaymentMethodInterface;

interface ShippingInformationViewFactoryInterface
{
    /** @param array|PaymentMethodInterface[] $syliusPaymentMethods */
    public function create(array $syliusPaymentMethods, SyliusOrderInterface $syliusOrder): ShippingInformationView;
}
