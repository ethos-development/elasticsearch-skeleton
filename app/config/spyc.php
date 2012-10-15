<?php

$config = \Spyc::YAMLLoad(CFG_PATH . '/config.yml');

/**
 * Convert the easier-to-maintain $config[$env][$lib] structure to
 * an easier-to-consume $config[$lib][$env] structure and merge in
 * the "default" values.
 */
foreach ( array('activerecord', 'elasticsearch', 'slim') as $lib )
    foreach ( $config as $env_name => $env_config )
    {
        $config[$lib][$env_name] = (
            (@$env_config[$lib] ?: array()) +
            (@$config['defaults'][$lib] ?: array())
        );
    }

return $config;
