<?php

return [

    'paths' => ['api/*','login','clientes','clientes/*', 'telefones','telefones/*','enderecos','enderecos/*', 'cartao', 'cartao/*','sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['http://localhost:3000'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
