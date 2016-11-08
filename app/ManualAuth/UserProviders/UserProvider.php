<?php
/**
 * Created by PhpStorm.
 * User: franc
 * Date: 25/10/16
 * Time: 20:33
 */

namespace app\ManualAuth\UserProvider;

interface UserProvider {

    public function validate(array $credentials);

}