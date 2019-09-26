<?php

class FindIndex {
    public $arr = array('red','blue','yellow','black');

    public function check($n){
        
        for( $i=0; $i<count($this->arr); $i++){
            if( $this->arr[$i] == $n)
                return $i;
        }   
    }
}

$po = new FindIndex();

$po->input = 'yellow';

echo $po->check($po->input);

?>