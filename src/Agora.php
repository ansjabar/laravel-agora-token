<?php

namespace AnsJabar\LaravelAgoraToken;

class Agora
{
    public static function appToken()
    {
        return ChatTokenBuilder2::buildAppToken(config('agora.app_id'), config('agora.app_certificate'), config('agora.token_expire_time'));
    }
    public static function userToken(string $uuid)
    {
        return ChatTokenBuilder2::buildUserToken(config('agora.app_id'), config('agora.app_certificate'), $uuid, config('agora.token_expire_time'));
    }
    public static function userAccountToken(string $uid)
    {
        $accessToken = new AccessToken2(config('agora.app_id'), config('agora.app_certificate'), config('agora.token_expire_time'));

        $serviceChat = new ServiceChat($uid);
        $serviceChat->addPrivilege($serviceChat::PRIVILEGE_USER, config('agora.token_expire_time'));
        $accessToken->addService($serviceChat);
        
        return $token = $accessToken->build();
    }
}
