<?php
return [
  'database' => [
    'host' => 'localhost',
    'port' => '',
    'charset' => NULL,
    'dbname' => 'espo',
    'user' => 'root',
    'password' => '',
    'platform' => 'Mysql'
  ],
  'smtpPassword' => '',
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false
  ],
  'restrictedMode' => false,
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'adminUpgradeDisabled' => false,
  'isInstalled' => true,
  'microtimeInternal' => 1715532509.465065,
  'passwordSalt' => 'e54b6adfcbb98497',
  'cryptKey' => 'b11cc92d5d21f5c388814f2063b0877a',
  'hashSecretKey' => '6293dd61a899bf173e015c5682bfef3f',
  'actualDatabaseType' => 'mariadb',
  'actualDatabaseVersion' => '11.1.2',
  'instanceId' => 'd0afba02-4c45-4a8a-b225-720e146e91cd'
];
