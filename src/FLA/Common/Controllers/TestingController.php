<?php
namespace FLA\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers;

class TestingController extends Controllers
{

    public function test(Request $request)
    {
        \Log::debug("test : ".$request->test);
        return "test";
    }

}