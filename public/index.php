<?php

require_once __DIR__.'/../vendor/autoload.php';

use Fbalves\Fixer\Entity\User;
use Fbalves\Fixer\Service\UserService;

$user = new User();
$user->name = 'Fernando';
echo $user->name.'<br/>';

$service = new UserService();
$name = $service->userNameToLower($user);
echo $name.'<br/>';
