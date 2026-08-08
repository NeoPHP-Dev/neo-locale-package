<?php

declare(strict_types=1);

namespace Vendor\NeoPHP\LocalePackage\Service;

use Vendor\NeoPHP\LocalePackage\Data\CurrencyList;

class CurrencyFormatter
{
    public function format(float $amount, string $currencyCode, string $locale = 'en'): string
    {
        $currency = CurrencyList::find($currencyCode);

        if ($currency === null) {
            return number_format($amount, 2) . ' ' . strtoupper($currencyCode);
        }

        $formatted = number_format(
            $amount,
            $currency['decimals'],
            $locale === 'fr' ? ',' : '.',
            $locale === 'fr' ? ' ' : ','
        );

        return $locale === 'fr'
            ? $formatted . ' ' . $currency['symbol']
            : $currency['symbol'] . $formatted;
    }

    public function all(): array
    {
        return CurrencyList::all();
    }
}