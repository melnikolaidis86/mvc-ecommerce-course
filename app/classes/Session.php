<?php
/**
 * User: meletisnikolaidis
 * Date: 20-Aug-18
 * Time: 3:18 PM
 */

namespace App\Classes;


class Session
{
    /**
     * Add a new session variable
     * @param $name
     * @param $value
     * @return mixed
     * @throws \Exception
     */
    public static function add($name, $value)
    {
        if ($name != '' && !empty($name) && $value != '' && !empty($value)) {
            return $_SESSION[$name] = $value;
        }

        throw new \Exception('Name and value required');
    }

    /**
     * Get a value from a session
     * @param $name
     * @return mixed
     */
    public static function get($name)
    {
        return $_SESSION[$name];
    }

    /**
     * Check if session exists
     * @param $name
     * @return bool
     * @throws \Exception
     */
    public static function has($name)
    {
        if ($name != '' && !empty($name)) {
            return (isset($_SESSION[$name])) ? true : false;
        }

        throw new \Exception('Name is required');
    }

    /**
     * Remove session
     * @param $name
     * @throws \Exception
     */
    public static function remove($name)
    {
        if(self::has($name)) {
            unset($_SESSION[$name]);
        }
    }
}