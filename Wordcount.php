<?php
class Wordcount{
    public function countWords($sentence){
        //explode adalah memecah string menjadi array
        //setelah diexplode, maka hasil array akan di masukkan fungsi count
        //count adalah fungsi
        return count(explode(" ",$sentence));
    }
}
?>