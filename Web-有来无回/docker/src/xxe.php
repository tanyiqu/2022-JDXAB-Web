<?php
echo ("Can you use Blind XXE to build a OOB for the /tmp/flag.txt ?");

// php>5.5

$data = file_get_contents('php://input');
$xml = simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOENT);


?>