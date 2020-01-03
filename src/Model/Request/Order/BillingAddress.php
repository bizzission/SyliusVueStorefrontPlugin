<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https;//bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Model\Request\Order;

final class BillingAddress
{
    /** @var string|null */
    public $region;

    /** @var int|null */
    public $region_id;

    /** @var string */
    public $country_id;

    /** @var string[] */
    public $street;

    /** @var string */
    public $company;

    /** @var string|null */
    public $telephone;

    /** @var string */
    public $postcode;

    /** @var string */
    public $city;

    /** @var string */
    public $firstname;

    /** @var string */
    public $lastname;

    /** @var string */
    public $email;

    /** @var string */
    public $vat_id;
}
