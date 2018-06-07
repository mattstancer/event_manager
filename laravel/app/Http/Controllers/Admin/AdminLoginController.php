<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Date: 04.06.2018
 * Time: 12:32
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Shared\SharedLoginController;
use App\Http\Requests\LoginFormRequest;
use App\Model\Admin\Employees;
use Carbon\Carbon;
use Faker\Provider\DateTime;
use Illuminate\Support\Facades\Config;

class AdminLoginController extends SharedLoginController
{

    public function home()
    {
        return view('admin.login');
    }

    public function check(LoginFormRequest $request)
    {
//        $salt=Config::get('constants.ADMIN.SALT');
//        $request->attributes['password']=$this->getPassword(Config::get('constants.ADMIN.SALT'),$request->attributes['password']);

        $hashed = $this->hashedPwd(Config::get('constants.ADMIN.SALT'), $request->get('password'));

        $request->merge(['password' => $hashed]);
        $employee = Employees::where("password", $request->get('password'))->where("userName", $request->get('user'))->orWhere("email", $request->get('user'))
            ->first();

    }
    /**
     * AdminLoginController constructor.
     */

//    public function __construct($login, $password)
//    {
//        parent::__construct(Config::get('constants.ADMIN.SALT'),$login, $password   );
//    }
}