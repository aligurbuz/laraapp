<?php

namespace App\Http\Controllers\TestApp\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetExampleController extends Controller
{
    /**
     * @method indexAction
     * @return string
     */
    public function indexAction(Request $request){

        return $this->request()->getMethod();
    }
}
