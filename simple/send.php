<?php

require_once '../vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPStreamConnection('localhost', '5672', 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('hello', false, false, false, false);

// for ($i = 0; $i < 2000000; $i++) {
//   $rand = rand();
//   $msg = new AMQPMessage($i.' - Hello World!' . $rand);
//   $channel->basic_publish($msg, '', 'hello');
// }

$msg = new AMQPMessage('Very simple Hello World!');
$channel->basic_publish($msg, '', 'hello');

echo " [x] Sent 'Hello World!'\n";
$channel->close();
$connection->close();
