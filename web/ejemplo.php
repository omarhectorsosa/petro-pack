<?php

class Error  extends Doctrine\Common\Proxy\Exception
{

}

try {
    throw new ErrorException(' Upps !!');
} catch (Error $e) {
    // este bloque no se ejecuta, no coincide el tipo de excepción
    echo 'ErrorException' . $e->getMessage();
} catch (Exception $e) {
    // este bloque captura la excepción
    echo 'Exception' . $e->getMessage();
}