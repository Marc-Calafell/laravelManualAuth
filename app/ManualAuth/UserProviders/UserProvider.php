<?php

namespace App\ManualAuth\UserProviders;

interface UserProvider
{
    public function validate(array $credentials);

    public function getUserByCredentials(array $credentials);

    public function setUser(array $data);
}