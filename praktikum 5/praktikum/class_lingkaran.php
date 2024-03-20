<?php
class Lingkaran{
    /**
    * Access Modifier:
    * 1. Public :poperti/method dapat diakses dimanapun
    * 2. Private: poperti/method hanya dapat diakses di dalam class tsb
    * 3. Protected: mirip seperti private, tetapi dapat diakses juga oleh child class
    */

    // properti
    private $jari;
    const PHI = 3.14;

    //funcion : function yang berada di dalam class
    //constructor: method yg otomatis berjalan ketika ada objek dibuat

    public function __construct($r)
    {
        $this->jari = $r;
    }
    public function getLuas()
    {
        return self::PHI * $this->jari * $this->jari;
    }

    public function getkeliling()
    {
        return 2 * self::PHI * $this->jari;
    }
}