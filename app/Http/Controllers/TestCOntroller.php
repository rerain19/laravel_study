<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestCOntroller extends Controller
{
    //
    public function __invoke(){
        return 'Test controller invoke';
    }
    
    public function test(){
        return 'Test Controller test';
    }
}
