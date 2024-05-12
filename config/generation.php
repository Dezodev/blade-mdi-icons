<?php

use Symfony\Component\Finder\SplFileInfo;

return [
    [
        // Define a source directory for the sets like a node_modules/ or vendor/ directory...
        'source' => __DIR__.'/../node_modules/@mdi/svg/svg',

        // Define a destination directory for your icons. The below is a good default...
        'destination' => __DIR__.'/../resources/svg',

        // Call an optional callback to manipulate the icon with the pathname of the icon,
        // the settings from above and the original icon file instance...
        'after' => static function (string $icon, array $config, SplFileInfo $file) {
            // ...
        },
    ],
];
