<?php

use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Messenger\DummyMessage;

$container->loadFromExtension('framework', [
    'http_method_override' => false,
    'serializer' => true,
    'messenger' => [
        'serializer' => [
            'default_serializer' => 'messenger.transport.symfony_serializer',
        ],
        'routing' => [
            DummyMessage::class => 'invalid',
        ],
        'transports' => [
            'amqp' => 'amqp://localhost/%2f/messages',
        ],
    ],
]);
