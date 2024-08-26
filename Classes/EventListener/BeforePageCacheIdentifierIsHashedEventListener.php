<?php

namespace Networkteam\CacheBase\EventListener;

use TYPO3\CMS\Frontend\Event\BeforePageCacheIdentifierIsHashedEvent;

class BeforePageCacheIdentifierIsHashedEventListener
{
    public function __invoke(BeforePageCacheIdentifierIsHashedEvent $event)
    {
        $params = $event->getPageCacheIdentifierParameters();
        $params['networkteam_cachebase'] = $GLOBALS['EXTCONF']['networkteam_cachebase']['keys'];
        $event->setPageCacheIdentifierParameters($params);
    }
}