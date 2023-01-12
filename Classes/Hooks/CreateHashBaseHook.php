<?php

namespace Networkteam\CacheBase\Hooks;

use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;

class CreateHashBaseHook
{
    public function addVariables($params, TypoScriptFrontendController $typoScriptFrontendController)
    {
        $params['hashParameters']['networkteam_cachebase'] = $GLOBALS['EXTCONF']['networkteam_cachebase']['keys'];
    }
}