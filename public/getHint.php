<?php
$a[] = "Linux";
$a[] = "Windows";
$a[] = "Mac";
$a[] = "Android";
$a[] = "BSD";
$a[] = "iOS";
$a[] = "Ostatné";
$a[] = "Nezadané";

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

echo $hint === "" ? "Žiadne kategórie začínajúce týmto písmenom" : $hint;
?>
