<?php


$email = "asd@gdg.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("es valido");
} else {
  echo("no es valido");
}

