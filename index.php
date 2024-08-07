<?php

require_once './Validator.php';

$passwords = [
    'ctZbvAR2cXJndcRq',
    '5vLcU7feu3H9JTtW',
    'oki21ig894sLaow5',
];

$validator = new Validator;

var_dump($validator->checkPassword('insecure_pass')); # false
var_dump($validator->checkPassword('Str0ng_pass')); # true
