<?php

namespace TanerInCode\Cities\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TanerInCode\Cities\Classes\IResponse;

class CitiesController extends Controller
{
    public  $responser;

    /**
     * CitiesController constructor.
     */
    public function __construct()
    { $this->responser = new IResponse(); }

    /**
     * @return null
     */
    public function index(){
        return NULL;
    }

    /**
     * @param null $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCode ($code = NULL)
    {
        if  ( empty($code) )
        { return self::getResponser()->make("error", "404", "Code Not Found !"); }

//        return self::getResponser()->make( "success", "200", "Response is OK" );
        return NULL;
    }


    /**
     * @return IResponse
     */
    public function getResponser(): IResponse
    {
        return $this->responser;
    }


}
