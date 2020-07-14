<?php
echo "Calculate area using length and width.\n";

$length = 20;
$width = 100;
$area =  $length * $width;

echo "area: $area m squares\n";

echo "percentage of student mark.\n";

$math = 76;
$french = 23;
$espagnole = 56;
$chemestry = 67;

$total = $math + $french + $espagnole + $chemestry ;
$totalmark = 400;
$mark = ($total/$totalmark)*100;

echo "percentage :" .$mark. "%\n";
echo "user has administrator role.\n";

$user = "Paul, Mirerekano";

$hasadminrole = null;
$adminrole = "admin";
$userrole ="admin";

$hasadminrole = ($adminrole === $userrole)? $user." has admin role.\n": $user. "does not have admin role.\n"; 

echo $hasadminrole;