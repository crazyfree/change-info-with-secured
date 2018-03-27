<?php

$version = env('VERSION', 'v1');
$host = env('API_URI', 'localhost');

$PROFILE_URL = $host . $version . '/profile';