<?php
if (empty($_REQUEST["destination"])) {
    header('HTTP/1.0 403 Forbidden');
    header('Location: https://'.$_SERVER['HTTP_HOST']);
} else {
    header('Location: '.$_REQUEST["destination"]);
}
?>

