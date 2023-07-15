<?php

namespace App\Services;

class Password
{
    public static function create($input)
    {
        // Generate a random password
        $password = self::generateRandomPassword();

        // Perform any additional logic or processing if needed

        // Return the generated password
        return $password;
    }

    private static function generateRandomPassword($length = 10)
    {
        // Define the characters allowed in the password
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

        // Generate a random password of the specified length
        $password = '';
        $charactersLength = strlen($characters);
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, $charactersLength - 1)];
        }

        return $password;
    }
}
