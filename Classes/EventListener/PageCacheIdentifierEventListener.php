<?php

namespace Networkteam\CacheBase\EventListener;

use TYPO3\CMS\Frontend\Event\BeforePageCacheIdentifierIsHashedEvent;

class PageCacheIdentifierEventListener
{
    public function __invoke(BeforePageCacheIdentifierIsHashedEvent $event): void
    {
        $parameters = $event->getPageCacheIdentifierParameters();
        $parameters['networkteam_cachebase'] = $GLOBALS['EXTCONF']['networkteam_cachebase']['keys'];
        $event->setPageCacheIdentifierParameters($parameters);
    }
}
