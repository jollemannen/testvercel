<?php
echo '<pre>';
echo 'env';
var_dump(getenv("testarvariable"));
print_r($_ENV);
echo 'server';
print_r($_SERVER);