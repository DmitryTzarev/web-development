<?php

function fillTheArgsArray(string $name, string $email): array
{
    $args = $_POST;
    $args['result'] = '';
    if (isFormCorrect($name, $email))
    {
        $args['result'] = 'Данные сохранены';
    }
    if (!isNameCorrect($name))
    {
        $args['name'] = 'Неправильно введено имя';
    }
    if (!isEmailCorrect($email))
    {
        $args['e-mail'] = 'Неправильно введен Email';
    }
    return $args;
}

function saveFile(string $dir, string $fileName, array $arr)
{
    if (!is_dir("../$dir"))
    {
        mkdir("../$dir", 0644);
    }
    $dataString = json_encode($arr);
    file_put_contents("../{$dir}/{$fileName}.txt", $dataString);
}

function saveFeedbackPage(): void
{
    $name = getPostParameter('name');
    $email = getPostParameter('e-mail');
    if (isFormCorrect($name, $email))
    {
        $dir = 'user_data';
        $fileName = (getPOSTParameter('e-mail'));
        $arr = $_POST;
        saveFile($dir, $fileName, $arr);
    }
    $args = fillTheArgsArray($name, $email);
    renderTemplate("main.tpl.php", $args);
}