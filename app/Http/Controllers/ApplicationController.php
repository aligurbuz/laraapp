<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AnnotationsController;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    //call annotation helper
    use AnnotationsController;

    /**
     * @var $app
     */
    public $app;

    /**
     * @method init
     * @param $params array
     * @return string
     * Application manager
     */
    public function init(...$params){

        //get application variable
        $this->getAppVars($params);

        //if there is no service class,throw logicException
        if(!class_exists($serviceName=$this->app->serviceName)){

            throw new \LogicException('The specified class is not available');
        }

        //if there is no method in service class,throw logicException
        if(!method_exists($serviceInstance=$this->resolve($serviceName),$serviceMethod=$this->app->serviceMethod)){

            throw new \LogicException('The specified method is not available in '.$serviceName);
        }

        //red application service call
        return $serviceInstance->$serviceMethod();
    }

    /**
     * @param $params
     * @method getAppVars
     */
    private function getAppVars($params){

        //application var object
        $this->app=new \stdClass();

        //application name params 0
        //application service params 1
        //application method request method
        //application file params 1
        $this->app->application     =$this->getPsr($params[0]);
        $this->app->service         =$this->getPsr($params[1]);
        $this->app->method          =$this->getPsr($this->request()->getMethod());
        $this->app->file            =$this->getPsr($params[1]);

        //get service name and service method for application
        $this->app->serviceName     = '\\App\\Http\\Controllers\\'.$this->app->application.'App\\'.$this->app->service.'\\'.$this->app->method.''.$this->app->service.'Controller';
        $this->app->serviceMethod   = $this->getMethodPrefix($params[2]);
    }
}


