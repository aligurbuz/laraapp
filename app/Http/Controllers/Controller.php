<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\AnnotationsController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //call annotation helper
    use AnnotationsController;

    /**
     * @param $method
     * @return string
     */
    public function getMethodPrefix($method){

        return $method.'Action';
    }

    /**
     * @param $class
     * @return mixed
     */
    public function resolve($class){

        $container = \DI\ContainerBuilder::buildDevContainer();
        return $container->get($class);
    }


    /**
     * @param $data
     * @return string
     */
    public function getPsr($data){

        return ucfirst(strtolower($data));
    }
}
