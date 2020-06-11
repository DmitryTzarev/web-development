<?php
function getRequestMethod()
{
    return $_SERVER['REQUEST_METHOD'];
}

function getPostParameter(string $value): ?string
{
    return (!empty($_POST[$value])) ? (string)$_POST[$value]: null;
}

function isNameCorrect(string $name): bool
{
   return preg_match("/^[A-Za-zА-Яа-я]+$/u", $name);
}

function isEmailCorrect(string $email): bool
{
    return preg_match("/^.+@.+\..+$/", $email);
}

function isFormCorrect(string $name, string $email): bool
{
    return (isNameCorrect($name) && isEmailCorrect($email));
}