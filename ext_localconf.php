<?php

$GLOBALS['EXTCONF']['networkteam_cachebase']['keys']['sentry_release'] = getenv('SENTRY_RELEASE');

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['createHashBase'][]
    = \Networkteam\CacheBase\Hooks\CreateHashBaseHook::class . '->addVariables';