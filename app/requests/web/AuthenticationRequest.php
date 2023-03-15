<?php

require_once("app/requests/BaseResquest.php");

class AuthenticationRequest extends BaseRequest
{
    public function VilidateLogin($data)
    {
        if(empty($data['email'])) {
            $this->errors['email'] = "Không được để trống email !";
        }

        if(empty($data['password'])) {
            $this->errors['password'] = "Không được để trống password !";
        }

        return $this->errors;
    }
}