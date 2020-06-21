<?php

if (isset($_POST["action"]) && $_POST["action"] === "Wyślij") {

  require_once "../../LoadWebhook.php";

  $discord = new DiscordWebhook($webhook["url"]);

  $username = $_POST["username"];
  $rank = $_POST["rank"];
  $wiek = $_POST["wiek"];
  $description = $_POST["description"];
  $cot = $_POST["cot"];
  

  $form = <<<FORM
Nazwa użytkownika: $username
Ranga: $rank
Wiek: $wiek
Dlaczego chcesz tą rangę: $description
Coś o tobie: $cot
``` ```
``` ```
``` ```
FORM;

  $discord->setMessage($form)->send();

}

include "inc/page.inc.php";
