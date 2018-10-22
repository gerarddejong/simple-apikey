<?php

include(__DIR__ . '/apikeyAuthorization.php');

header("HTTP/1.1 201 OK");
printf('{"message":"If you can see this, you have successfully authorized yourself."}');