<?php
namespace Viper;

/**
 * Hasing class
 */
class Hash
{
    /**
     * Hash password using php password_hash and default algorithm
     *
     * @param $password
     * @param $options
     * @return bool|string
     */
    public static function password($password, $options = ['cost' => 12])
    {
        return password_hash($password,PASSWORD_DEFAULT, $options);
    }

    /**
     * Verify pasword for matching hash
     * @param $password
     * @param $hash
     * @return bool
     */
    public static function verifyPassword($password,$hash)
    {
        return password_verify($password,$hash);
    }

    /**
     * Creates random activation code
     * @return string
     */
    public static function makeActivationCode()
    {
        return bin2hex(random_bytes(16));
    }
}