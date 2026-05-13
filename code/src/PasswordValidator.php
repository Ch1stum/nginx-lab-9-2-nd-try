<?php

namespace App;

class PasswordValidator
{
    public function isLongEnough(string $password): bool
    {
        return strlen($password) >= 8;
    }

    public function hasNumber(string $password): bool
    {
        return preg_match('/\d/', $password) === 1;
    }

    public function isValid(string $password): bool
    {
        return $this->isLongEnough($password) && $this->hasNumber($password);
    }
}
