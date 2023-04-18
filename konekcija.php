<?php
/* Ovde se konektujemo na bazu, i kada god includujemo konekciju mi se fakticki konektujemo na nasu bazu*/
$konekcija = new Mysqli('localhost','root','','srbijanocu');
$konekcija->set_charset('utf8');
