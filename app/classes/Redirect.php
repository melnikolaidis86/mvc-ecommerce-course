<?php
/**
 * User: meletisnikolaidis
 * Date: 20-Aug-18
 * Time: 5:43 PM
 */

namespace App\Classes;


class Redirect
{
    /**
     * Redirect to a specific page
     * @param $page
     */
    public static function to($page)
    {
        header("location: $page");
    }

    /**
     * Redirect to same page;
     */
    public static function back()
    {
        $uri = $_SERVER['REQUEST_URI'];
        header("location: $uri");
    }
}