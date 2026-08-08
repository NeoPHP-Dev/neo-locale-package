<?php

declare(strict_types=1);

namespace Vendor\NeoPHP\LocalePackage;

use Neo\Core\Package\Abstract\AbstractPackage;

class NeoLocalePackage extends AbstractPackage
{
    public function getName(): string
    {
        return 'Locale';
    }

    public function getPath(): string
    {
        return dirname(__DIR__);
    }
}