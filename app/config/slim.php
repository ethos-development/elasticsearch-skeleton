<?php

return new \Slim\Slim(array(
    'mode' => APP_ENV,
    'templates.path' => realpath(APP_PATH . '/views'),
) + $config['slim'][APP_ENV]);

