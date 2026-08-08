<?php

declare(strict_types=1);

namespace Vendor\NeoPHP\LocalePackage\Data;

class CountryList
{
    public static function all(): array
    {
        return [
            'FR' => ['name' => 'France', 'dialCode' => '+33', 'currency' => 'EUR'],
            'DE' => ['name' => 'Germany', 'dialCode' => '+49', 'currency' => 'EUR'],
            'ES' => ['name' => 'Spain', 'dialCode' => '+34', 'currency' => 'EUR'],
            'IT' => ['name' => 'Italy', 'dialCode' => '+39', 'currency' => 'EUR'],
            'PT' => ['name' => 'Portugal', 'dialCode' => '+351', 'currency' => 'EUR'],
            'BE' => ['name' => 'Belgium', 'dialCode' => '+32', 'currency' => 'EUR'],
            'NL' => ['name' => 'Netherlands', 'dialCode' => '+31', 'currency' => 'EUR'],
            'LU' => ['name' => 'Luxembourg', 'dialCode' => '+352', 'currency' => 'EUR'],
            'CH' => ['name' => 'Switzerland', 'dialCode' => '+41', 'currency' => 'CHF'],
            'GB' => ['name' => 'United Kingdom', 'dialCode' => '+44', 'currency' => 'GBP'],
            'IE' => ['name' => 'Ireland', 'dialCode' => '+353', 'currency' => 'EUR'],
            'US' => ['name' => 'United States', 'dialCode' => '+1', 'currency' => 'USD'],
            'CA' => ['name' => 'Canada', 'dialCode' => '+1', 'currency' => 'CAD'],
            'MX' => ['name' => 'Mexico', 'dialCode' => '+52', 'currency' => 'MXN'],
            'BR' => ['name' => 'Brazil', 'dialCode' => '+55', 'currency' => 'BRL'],
            'JP' => ['name' => 'Japan', 'dialCode' => '+81', 'currency' => 'JPY'],
            'CN' => ['name' => 'China', 'dialCode' => '+86', 'currency' => 'CNY'],
            'IN' => ['name' => 'India', 'dialCode' => '+91', 'currency' => 'INR'],
            'AU' => ['name' => 'Australia', 'dialCode' => '+61', 'currency' => 'AUD'],
            'MA' => ['name' => 'Morocco', 'dialCode' => '+212', 'currency' => 'MAD'],
            'DZ' => ['name' => 'Algeria', 'dialCode' => '+213', 'currency' => 'DZD'],
            'TN' => ['name' => 'Tunisia', 'dialCode' => '+216', 'currency' => 'TND'],
            'SN' => ['name' => 'Senegal', 'dialCode' => '+221', 'currency' => 'XOF'],
            'CI' => ['name' => "Côte d'Ivoire", 'dialCode' => '+225', 'currency' => 'XOF'],
            'SE' => ['name' => 'Sweden', 'dialCode' => '+46', 'currency' => 'SEK'],
            'NO' => ['name' => 'Norway', 'dialCode' => '+47', 'currency' => 'NOK'],
            'DK' => ['name' => 'Denmark', 'dialCode' => '+45', 'currency' => 'DKK'],
            'PL' => ['name' => 'Poland', 'dialCode' => '+48', 'currency' => 'PLN'],
        ];
    }

    public static function find(string $code): ?array
    {
        return self::all()[strtoupper($code)] ?? null;
    }
}