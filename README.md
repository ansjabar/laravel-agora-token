# laravel-agora-token

Generate Agora authentication tokens.

## Installation

Require this package with composer.

```bash
$ composer require ansjabar/laravel-agora-token
```

## Integration

```bash
$ php artisan vendor:publish --provider="AnsJabar\LaravelAgoraToken\AgoraServiceProvider"
```

Add `AGORA_APP_ID`, `AGORA_CERTIFICATE` and '`AGORA_TOKEN_EXPIRE_TIME` to your `.env` file.

## Usasge
```php
\AnsJabar\LaravelAgoraToken\Agora::appToken(); // To get app token
\AnsJabar\LaravelAgoraToken\Agora::userToken($uuid); // To get user token from its uuid
\AnsJabar\LaravelAgoraToken\Agora::userAccountToken("username"); // To get user token from uts username
```
## License

This laravel-teams-logger package is available under the MIT license. See the LICENSE file for more info.
