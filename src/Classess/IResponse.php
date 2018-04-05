<?php
namespace TanerInCode\Cities\Classes;

class IResponse
{
    public $ResponseData, $status;

    public function  make($flag = "error", $code = 404, $message = "not data available", $data = array())
    {
        $this->ResponseData = [ "flag" => $flag, "code" => $code, "message" => $message, "data" => $data];
        $this->status = $code;

        return response()->json($this->ResponseData, $this->status);
    }

}