<?php

class Lokali{
  public $lokal_id;
  public $naziv_lokala;
  public $ulica;
  public $opis;
  public $vrsta;

  
  public static function vratiLokale($konekcija, $vrsta_id = 0){
    $upit = "SELECT * FROM lokali l join vrsta_muzike vm on l.vrsta_muzike_id = vm.id";

    $rezultat = $konekcija->query($upit);
    $niz = [];
    while($red = $rezultat->fetch_object()){

      if($vrsta_id == 0 || $vrsta_id == $red->id){
        $vm = new VrstaMuzike();
        $vm->id = $red->id;
        $vm->vrsta = $red->vrsta;

        $lokal = new Lokali();
        $lokal->lokal_id = $red->lokal_id;
        $lokal->naziv_lokala = $red->naziv_lokala;
        $lokal->ulica = $red->ulica;
        $lokal->opis = $red->opis;
        $lokal->vrsta = $vm;

        $niz[] = $lokal;

      }

 
    }

    return $niz;
  }

}
