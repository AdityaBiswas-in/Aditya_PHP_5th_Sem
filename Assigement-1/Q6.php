<?php

$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';

$parsed_url = parse_url($url);

echo "Scheme : " . ($parsed_url['scheme'] ?? '') . "<br>";
echo "Host : " . ($parsed_url['host'] ?? '') . "<br>";
echo "Path : " . ($parsed_url['path'] ?? '') . "<br>";

?>
