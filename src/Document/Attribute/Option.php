<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Document\Attribute;

final class Option implements \JsonSerializable
{
    private const LABEL = 'label';
    private const VALUE = 'value';

    /** @var string */
    private $label;

    /** @var int */
    private $value;

    public function __construct(string $label, int $value)
    {
        $this->label = $label;
        $this->value = $value;
    }

    public function jsonSerialize()
    {
        return [
            self::LABEL => $this->label,
            self::VALUE => $this->value,
        ];
    }
}