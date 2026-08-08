<?php

declare(strict_types=1);

namespace Vendor\NeoPHP\LocalePackage\Service;

use Vendor\NeoPHP\LocalePackage\Data\CountryList;

class CountryProvider
{
    public function all(): array
    {
        return CountryList::all();
    }

    public function find(string $code): ?array
    {
        return CountryList::find($code);
    }

    public function getName(string $code): ?string
    {
        return CountryList::find($code)['name'] ?? null;
    }

    public function getDefaultCurrency(string $code): ?string
    {
        return CountryList::find($code)['currency'] ?? null;
    }
}