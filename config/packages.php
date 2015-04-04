<?php

return [

    /*
     * Add middleware here to boost the functionality of your site.
     */

    'packages' => [

        'Songbird\Package\CommonMark\CommonMarkProvider',
        'Songbird\Package\Plates\PlatesProvider',
        'Songbird\Package\Jsonable\JsonableProvider',
        'Codist\ReadTimeCalculatorProvider',

    ],

];