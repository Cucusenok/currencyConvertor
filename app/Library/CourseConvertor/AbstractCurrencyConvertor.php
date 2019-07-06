<?php

namespace App\Library\CourseConvertor;

abstract class AbstractCurrencyConvertor{

    /*
    * string
    */
    protected $url;

    /*
     * Loading data from api
     */
    protected $data;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function get()
    {
        try{
            $this->data = file_get_contents($this->url);
            return $this;

        }
        catch(\Exception $e){
            return;
            //TODO: Error handling and logging
        }
    }

    abstract public function convert();


}