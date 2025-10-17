<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Core\ValueObject\PhpVersion;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void {
    // Paths to refactor
    $rectorConfig->paths([
        __DIR__ . '/core',
        __DIR__ . '/index.php',
        __DIR__ . '/logout.php',
    ]);

    // Target PHP version
    $rectorConfig->phpVersion(PhpVersion::PHP_82);

    // Useful sets for migration and quality
    $rectorConfig->sets([
        SetList::PHP_82,
        SetList::CODE_QUALITY,
    ]);

    // Autoload project code for Rector
    $rectorConfig->autoloadPaths([
        __DIR__ . '/core',
    ]);
};
