<?php

declare(strict_types=1);

namespace Vendor\NeoPHP\LocalePackage\Data;

class CurrencyList
{
    public static function all(): array
    {
        return [
            'EUR' => ['symbol' => '€', 'decimals' => 2, 'name' => 'Euro'],
            'USD' => ['symbol' => '$', 'decimals' => 2, 'name' => 'US Dollar'],
            'GBP' => ['symbol' => '£', 'decimals' => 2, 'name' => 'British Pound'],
            'CHF' => ['symbol' => 'CHF', 'decimals' => 2, 'name' => 'Swiss Franc'],
            'CAD' => ['symbol' => '$', 'decimals' => 2, 'name' => 'Canadian Dollar'],
            'MXN' => ['symbol' => '$', 'decimals' => 2, 'name' => 'Mexican Peso'],
            'BRL' => ['symbol' => 'R$', 'decimals' => 2, 'name' => 'Brazilian Real'],
            'JPY' => ['symbol' => '¥', 'decimals' => 0, 'name' => 'Japanese Yen'],
            'CNY' => ['symbol' => '¥', 'decimals' => 2, 'name' => 'Chinese Yuan'],
            'INR' => ['symbol' => '₹', 'decimals' => 2, 'name' => 'Indian Rupee'],
            'AUD' => ['symbol' => '$', 'decimals' => 2, 'name' => 'Australian Dollar'],
            'MAD' => ['symbol' => 'DH', 'decimals' => 2, 'name' => 'Moroccan Dirham'],
            'DZD' => ['symbol' => 'DA', 'decimals' => 2, 'name' => 'Algerian Dinar'],
            'TND' => ['symbol' => 'DT', 'decimals' => 3, 'name' => 'Tunisian Dinar'],
            'XOF' => ['symbol' => 'CFA', 'decimals' => 0, 'name' => 'West African CFA Franc'],
            'SEK' => ['symbol' => 'kr', 'decimals' => 2, 'name' => 'Swedish Krona'],
            'NOK' => ['symbol' => 'kr', 'decimals' => 2, 'name' => 'Norwegian Krone'],
            'DKK' => ['symbol' => 'kr', 'decimals' => 2, 'name' => 'Danish Krone'],
            'PLN' => ['symbol' => 'zł', 'decimals' => 2, 'name' => 'Polish Złoty'],
        ];
    }

    public static function find(string $code): ?array
    {
        return self::all()[strtoupper($code)] ?? null;
    }
}