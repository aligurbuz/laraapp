<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

trait AnnotationsController {

    /**
     * @var $request \Illuminate\Http\Request
     */
    public $request;

    /**
     * AnnotationsController constructor.
     * @return Request
     */
    public function request() {

        $this->request=Request::createFromGlobals();
        return $this->request;
    }


}