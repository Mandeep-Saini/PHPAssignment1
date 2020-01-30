

<?php
// Mandeep Saini 8621039
$string="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laboru";
echo "Previous String: <br><p>$string </p><br>";
$array=explode(" ",$string);
sort($array);
$array=implode(" ",$array);

echo "New String:<br> <p>$array</p> ";
 



?>