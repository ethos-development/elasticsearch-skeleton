<?php

// Configure ActiveRecord to make it aware of Models and connection
ActiveRecord\Config::initialize(function($Config) use ($config) {
        $Config->set_model_directory(APP_PATH . '/models');

        $Config->set_connections($config['activerecord']);

        // Set the default connection based on the environment defined in the config file
        $Config->set_default_connection(APP_ENV);
});
