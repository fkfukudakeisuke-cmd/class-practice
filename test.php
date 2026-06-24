<?php

require_once 'Dbc.php';

try{
    $dbc = new Dbc();
    $dbc-> db();
    echo "接続成功";

}
catch (Exception $e)
{
    echo "接続失敗".$e->getMessage();
}



?>