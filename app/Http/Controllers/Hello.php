<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello extends Controller
{
	public function __construct()
	{
		echo "Hello World0";
	}
	
	public function index()
	{
    	echo "Hello World";
	}
}
