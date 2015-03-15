<?php

return [

    /*
     * Twig is the default templating engine for Songbird.
     * You can find detailed documention on its usage at http://twig.sensiolabs.org/documentation
     */

    'twig' => [

        /*
         * Enable Twig caching.
         */

        'cache' => false,

        /*
         * Enable Twig autoescaping.
         */

        'autoescape' => false,

        /*
         * Enable Twig debugging.
         */

        'debug' => false,

        /*
         * Informs Twig of our template root.
         */

        'templatesDir' => '../web/themes',

    ],

];