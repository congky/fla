<?php
namespace FLA\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TestingController extends Controller
{

    public function test(Request $request)
    {
        \Log::debug("test : ".$request->test);
        return "test";
    }

}