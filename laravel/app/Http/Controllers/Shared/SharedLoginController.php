<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Date: 04.06.2018
 * Time: 12:26
 */

namespace App\Http\Controllers\Shared;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SharedLoginController extends Controller
{

    private $salt;
    private $login;
    private $password;
    private $token;
    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */


    public function hashedPwd($salt,$password)
    {

        return sha1($salt.$password);
    }



    /**
     * SharedLoginController constructor.
     * @param $salt
     * @param $login
     * @param $password
     */

//    public function __construct($salt, $login, $password)
//    {
//        $this->salt = $salt;
//        $this->login = $login;
//        $this->setPassword($salt,$password);
//    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
//    public function setToken()
//    {
//        md5()
//        $this->token = $token;
//    }

}