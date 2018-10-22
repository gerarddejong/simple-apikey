# simple-apikey
Simple PHP based API key authorization

This zero dependency API key authorization helper is not for production use. It's an example and meant to be useful in allowing one to quickly add simple security when the only other option is having nothing at all - which should never be the case.

## Usage
```php
<?php

// Simply add this one line to your current php api code
include(__DIR__ . '/apikeyAuthorization.php');

// Then do what ever your api would normally do
header("HTTP/1.1 201 OK");
printf('{"message":"Authorized!"}');

```

## Disclaimer
This code makes no gauntees of security. I recommend that you use an established OAuth2.0 implementation over simple API key authorization.
