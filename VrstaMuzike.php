<?php

class VrstaMuzike{
  public $id;
  public $vrsta;

  public static function vratiVrste($konekcija){
    $upit = "SELECT * FROM vrsta_muzike";

    
    $rezultat = $konekcija->query($upit);
    $niz = [];
    while($red = $rezultat->fetch_object()){

      $vm = new VrstaMuzike();
      $vm->id = $red->id;
      $vm->vrsta = $red->vrsta;
      $niz[] = $vm;
    }

    return $niz;
  }

}
