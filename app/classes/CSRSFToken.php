<?php
/**
 * User: meletisnikolaidis
 * Date: 20-Aug-18
 * Time: 3:57 PM
 */

namespace App\Classes;


class CSRSFToken
{
    /**
     * Generate Token
     * @throws \Exception
     */
    public static function _token()
    {
        if(!Session::has('token')){
            $randomToken = base64_encode(openssl_random_pseudo_bytes(32));
            Session::add('token',$randomToken);
        }

        return Session::get('token');
    }

    /**
     * Verify CSRFToken
     * @param $requestToken
     * @return bool
     * @throws \Exception
     */
    public static function verifyCSRFToken($requestToken)
    {
        if(Session::has('token') && Session::get('token') == $requestToken){
            Session::remove('token');
            return true;
        }

        return false;
    }
}