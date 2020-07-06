<?php
/**
 * 
 * 1)No need to use $ for constant definition.
 * 2)Constants are define only via define method.
 * 3)Constants value can be assign only once.
 * 4) Constants have a global scope .They can be accessed anywhere.
 * 5)Constants can be used to access the constants.
 * 
 */

 //define constants and assign them 
 $myname = "Claude Rukamiza\n";
 define ("my_prevname", "change something");
 //CONST my_prevname = "my constant value";
 define ("myprevname", "Jean Claude Nkurunziza\n");

 echo myprevname.$myname;

 function print_const(){
    $myname = "Claude Rukamiza\n";
     echo  myprevname.$myname;
 }
 print_const();
 echo my_prevname."\n";