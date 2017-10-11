<?php

namespace App\Http\Controllers\TestApp\Example;

use App\Http\Controllers\Controller;

class PostExampleController extends Controller
{
    /**
     * @method indexAction
     * @return string
     * send header as csrf_token() with X-CSRF-TOKEN key
     */
    public function indexAction(){

        return $this->request()->getClientIp();
    }
}
