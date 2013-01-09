<?php

require_once(__DIR__ . '/classes/StartupAPI.php');

$options = getopt('mp');

if (array_key_exists('m', $options)) {
	StartupAPI::incrementMinorVersion();
}

if (array_key_exists('p', $options)) {
	StartupAPI::incrementPatchLevel();
}

echo StartupAPI::getVersion();
