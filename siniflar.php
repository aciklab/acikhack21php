<?php 

class TemelSinif {
    public $temeldegisken = "temeldegisken1";

    public function temelFonksiyon()
    {
        return "temelFonksiyon";
    }
}


class BasitSinif extends TemelSinif {

    public $degisken = "degisken1";

    public function getDegisken()
    {
        return $this->degisken;
    }

    public function temelFonksiyon()
    {
        return "basitFonksiyon";
    }

    public function __construct($degisken)
    {
        $this->degisken = $degisken;
    }
}


$sinif = new BasitSinif("yenidegisken");
echo $sinif->degisken . "<br>";
echo $sinif->getDegisken() . "<br>";
echo $sinif->temelFonksiyon() . "<br>";