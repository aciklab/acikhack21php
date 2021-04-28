<?php

function fonksiyon(&$degisken)
{
    $degisken = "yeni";
}

$degisken = "degisken1";

fonksiyon($degisken);

echo $degisken;