<?php

// TODO: Configure Elastica_Client
function _elastica_config ( $config )
{
    $elastica = array(
        'client' => $client = new Elastica_Client($config['client']),
    );

    foreach ( $config['indexes'] as $index_name => $index_config )
        $elastica[$index_name] = $client->getIndex($index_name);

    return (object) $elastica;
}

// Elastica doesn't manage environment connections like ActiveRecord...
return _elastica_config($config['elasticsearch'][APP_ENV]);

