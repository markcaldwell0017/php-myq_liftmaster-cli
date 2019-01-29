<?php
if ($argc != 2 ) {
    exit( "Usage: " . $argv[0] . " <open|close|status> \n" );
}
$action = $argv[1];
require_once('MyQ.php');
$conf = parse_ini_file('MyQ.ini');
$door = new MyQ();

echo date('H:i:s'), " Request: Login\n";  // Echo requested action
$door->login($conf['username'], $conf['password']);
$report = function() {
    global $door;
    echo date('H:i:s'), " Status: door {$door->refresh()->state}\n";
    // echo "{$door->refresh()->state} as of {$door->state->delta} ago\n";
};

if ($action != 'status') {
    echo $report();             // Echo current status
}

echo date('H:i:s'), " Request: $action\n";  // Echo requested action

if ($action == 'open') {    // Open the door
    $door->open();
    sleep(2);
    echo $report();
    sleep(15);
    echo $report();
}
if ($action == 'close') {   // Close the door
    $door->close();
    sleep(10);
    echo $report();
    sleep(15);
    echo $report();
}
if ($action == 'status') {  // Door status
    echo $report();
}
