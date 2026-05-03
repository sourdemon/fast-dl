<?php
// CAMBIAR ESTA RUTA ABSOLUTA A TU SERVIDOR
$actions_dir = "https://sourdemon.github.io/fast-dl/czero/addons/amxmodx/data";

$uid = isset($_GET["uid"]) ? preg_replace("/[^0-9]/", "", $_GET["uid"]) : "";
$token = isset($_GET["token"]) ? preg_replace("/[^a-zA-Z0-9]/", "", $_GET["token"]) : "";
$action = isset($_GET["action"]) ? preg_replace("/[^a-zA-Z0-9_]/", "", $_GET["action"]) : "";

$allowed = array("pistols", "main");

if ($uid !== "" && $token !== "" && in_array($action, $allowed, true)) {
    $file = $actions_dir . "/bmd_action_" . $uid . "_" . $token . ".txt";
    file_put_contents($file, $action, LOCK_EX);
}

echo '<body bgcolor="#000000"><font face="Tahoma" size="2" color="#ffb000">';
echo 'Procesando...';
echo '</font></body>';
?>