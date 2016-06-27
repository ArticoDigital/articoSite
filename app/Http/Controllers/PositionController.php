<?php

namespace Artico\Http\Controllers;

use Illuminate\Http\Request;

use Artico\Http\Requests;

class PositionController extends Controller
{
    function index(){
        return view("back.positions.php");
    }
}
