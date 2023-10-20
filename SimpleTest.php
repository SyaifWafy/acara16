<?php
//membutuhkan Framework PHPUnit
use PHPUnit\Framework\TestCase;

//class yang akan diuji
require_once "Wordcount.php";

//class untuk run testing
class SimpleTest extends TestCase
{
    public function testcountWords(){
        //menggunakan class yang akan diuji
        $Wc = new WordCount();
        //memasukkan parameter 4 kata, yang harusnya dapat output 4
        $TestSentence = "Nama saya Ilham Kurniawan";
        $WordCount = $Wc->countWords($TestSentence);
        //melakukan assert equal, ekspektasi harusnya 4, jika benar berarti Wordcount berfungsi dengan baik
        //jika terjadi failure berarti ada yang salah pada codingan tersebut
        $this->assertEquals(4, $WordCount);
    }
}
?>