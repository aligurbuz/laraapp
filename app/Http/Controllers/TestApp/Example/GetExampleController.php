<?php

namespace App\Http\Controllers\TestApp\Example;

use App\Http\Controllers\Controller;

class GetExampleController extends Controller
{
    /**
     * @method indexAction
     * @return string
     */
    public function indexAction(){

        return $this->request()->getClientIp();
    }

}
