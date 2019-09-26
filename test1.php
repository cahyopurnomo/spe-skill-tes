<?php

class AngkaNarsis {
    public $input = 0;

    public function is_narsis($n){
        $len = $this->count_digit($n);
        $arr = str_split($n);

        for( $i=0; $i<count($arr); $i++){
            $s += pow($arr[$i], $len);
        }

        if( $s == $n )
            return 'true';
        else
            return 'false';
    }

    public function count_digit($n){
        return strlen($n);
    }
}

$angka_narsis = new AngkaNarsis();
$angka_narsis->input = 1634;

echo $angka_narsis->input.' = '. $angka_narsis->count_digit($angka_narsis->input).' Digits<br>';
echo $angka_narsis->is_narsis($angka_narsis->input);
?>