<?php
/**
 * Created by PhpStorm.
 * User: franc
 * Date: 25/10/16
 * Time: 20:06
 */

namespace App\ManualAuth;




class CookieGuard implements Guard
{
    protected $provider;

    /**
     * CookieGuard constructor.
     * @param $provider
     */
    public function __construct(UserProvider $provider)  // Encara no tenim feta la nostra interficie
    {
        $this->provider = $provider;
    }


    public function check()
    {
        return isset($_COOKIE['user']) ? true : false;
    }

    public function validate(array $credentials)
    {
     //   return $this->provider->validate($credentials);
        return true;
    }

    public function setUser($user)
    {
        // TODO: Implement setUser() method.
    }
}