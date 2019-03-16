<?php

require 'vendor/autoload.php';

use \Model\Ticket;

$ticket = new Ticket('ด่วนพิเศษ 13');
$ticket->setStation('กรุงเทพ', 'เชียงใหม่');
$ticket->setSeat(2, 'A4');
$ticket->setTime('13.00', '16.00');
$ticket->setPrice(35.00);

require 'index.view.php';
