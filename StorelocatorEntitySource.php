<?php

declare(strict_types=1);

/**
 * @author Amasty Team
 * @copyright Copyright (c) Amasty (https://www.amasty.com)
 * @package XML Google® Sitemap for Magento 2
 */

namespace Amasty\XmlSitemap\Model\Source;

use Amasty\XmlSitemap\Api\SitemapEntity\SitemapEntitySourceInterface;
use Amasty\XmlSitemap\Api\SitemapInterface;
use Generator;

class StorelocatorEntitySource implements SitemapEntitySourceInterface
{
    public const ENTITY_CODE = 'amasty_storelocator_pages';
    public const ENTITY_LABEL = 'Amasty Store Locator Pages';

    public function getData(SitemapInterface $sitemap): Generator
    {
        yield [];
    }

    public function getEntityCode(): string
    {
        return self::ENTITY_CODE;
    }

    public function getEntityLabel(): string
    {
        return self::ENTITY_LABEL;
    }
}
