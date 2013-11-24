<?php

namespace attitude\Elements;

class ResponderHTML_Element extends Singleton_Prototype implements Responder_Interface
{
    private $request = null;

    public function respond($data)
    {
        header('Content-Type: text/html');

        echo '<pre>'.json_encode($data, JSON_PRETTY_PRINT).'</pre>';

        return;
    }
}
