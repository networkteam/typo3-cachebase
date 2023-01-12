# TYPO3 Extension networkteam_cachebase

In container environments with rolling updates there is the point where two versions run parallel and a page cache flush
is not what we want.

## What does it do?

This extension adds variables to the page cache identifier calculation. For our Use Case it adds the 
environment variable `SENTRY_RELEASE`, which contains a version number.

More variables can be added like 

```php
$GLOBALS['EXTCONF']['networkteam_cachebase']['keys']['your_key'] = 'value';
```

## Installation

```shell
composer req networkteam/typo3-cachebase
```

## Background

The page cache hash calculation is based on

* Page row
* TypoScript Conditions
* Modification time of loaded TypoScript files
* Site
* ... and some more

but changes for example in Fluid Templates are not taken into account.