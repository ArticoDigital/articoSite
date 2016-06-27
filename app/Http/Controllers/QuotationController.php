<?php

namespace Artico\Http\Controllers;

use Illuminate\Http\Request;

use Artico\Http\Requests;

class QuotationController extends Controller
{
    function index(){
        return view("back.quotation");
    }
}
