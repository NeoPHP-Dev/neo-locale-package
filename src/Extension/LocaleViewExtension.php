<?php

declare(strict_types=1);

namespace Vendor\NeoPHP\LocalePackage\Extension;

use Neo\Core\DI\Container;
use Neo\Core\Extension\Attribute\Extension;
use Neo\Core\Extension\Enum\ExtensionTypeEnum;
use Neo\Core\View\Interface\TwigExtensionInterface;
use Vendor\NeoPHP\LocalePackage\Service\CountryProvider;
use Vendor\NeoPHP\LocalePackage\Service\CurrencyFormatter;

#[Extension(type: ExtensionTypeEnum::VIEW)]
class LocaleViewExtension implements TwigExtensionInterface
{
    public function __construct(
        private Container $container
    ) {
    }

    public function getFunctions(): array
    {
        return [
            'countries' => function () {
                /** @var CountryProvider $provider */
                $provider = $this->container->get(CountryProvider::class);
                return $provider->all();
            },
            'currencies' => function () {
                /** @var CurrencyFormatter $formatter */
                $formatter = $this->container->get(CurrencyFormatter::class);
                return $formatter->all();
            },
        ];
    }

    public function getFilters(): array
    {
        return [
            'format_currency' => function (float $amount, string $currencyCode, string $locale = 'en') {
                /** @var CurrencyFormatter $formatter */
                $formatter = $this->container->get(CurrencyFormatter::class);
                return $formatter->format($amount, $currencyCode, $locale);
            },
        ];
    }
}