<?php

namespace App\Http\Controllers;

use App\Repositries\AuthRepo\AuthInterface;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $authinterface;
    public function __construct(AuthInterface $authInterface)
    {
        $this->authinterface = $authInterface;
    }


    public function login(Request $request)
    {
        return $this->authinterface->login($request);
    }

    public function logout()
    {
        return $this->authinterface->logout();
    }
}
