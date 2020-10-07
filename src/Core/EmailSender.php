<?php


namespace AYakovlev\Core;


use AYakovlev\Model\User;

class EmailSender
{
    public static function send(
        User $receiver,
        string $subject,
        string $templateName,
        array $templateVars = []
    ): void
    {
        extract($templateVars);

        ob_start();
        require __DIR__ . '/../Mail/' . $templateName;
        $body = ob_get_contents();
        ob_end_clean();
        $tmpmail = "To: " . $receiver->getEmail() . "<br>" .  "Theme: " . $subject . "<br><br>" . $body;
        var_dump($tmpmail);
        mail($receiver->getEmail(), $subject, $body, 'Content-Type: text/html; charset=UTF-8');
    }
}