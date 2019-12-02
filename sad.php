<?php
    
  echo "Apa yang ingin kamu katakan ke doi ?
  1. aku sayang dia
  2. exit
  ";
  echo " Masukkan Pilihanmu : ";
  $pil = trim(fgets(STDIN));
  
  system("clear");
  
  if ( $pil == 1 ) {
  	echo " percuma kalau kamu sayang dia tapi dia sayang orang lain.. \n";
  	sleep(4);
  	system("clear");
  	echo " kamu cuma ngejar sesuatu yang tak pasti.. \n"; 
  	sleep(4);
  	system("clear");
  	echo " Terlalu lama memperjuangkannya tetapi tak dihargai.. \n";
  	sleep(4);
  	system("clear");
  	echo " Bukannya dia tidak peka.. tapi dia emang tidak mau sama kamu.. \n";
  	sleep(4);
  	system("clear");
  	echo " yang sabar ya bro.. :') \n ";
  	sleep (3);
  	echo "Kamu teriak aja BANGSATLAH \n ";
  	
  } elseif ( $pil == 2 ) {
  	echo " Bye.. ";
  } else {
  	echo " ish ga baik.. ga input apa apa \n";
  }
  
 
  


?>