<?php
require __DIR__ .'/productos.php';

$jaxon = $jaxon();

if($jaxon->canProcessRequest())
    $jaxon->processRequest();
    