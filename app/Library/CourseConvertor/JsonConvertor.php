<?php

namespace App\Library\CourseConvertor;

use App\Library\CourseConvertor\AbstractConvertor;

class JsonConvertor extends AbstractConvertor{


    public function convert(){
        $this->data = json_decode($this->data);
        return $this->data->{'Valute'}->{'EUR'}->{'Value'};
    }

}
