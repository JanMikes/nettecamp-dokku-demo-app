<?php declare(strict_types=1);

$word = getenv('GREETING') ?: 'empty';

echo $word;

echo "\nThis is deploy from github actions";
