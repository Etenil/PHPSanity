<?php

class SStringTest extends centrifuge\Test {
    function testAddCSlashes() {
        // TODO write tests...
        $string = "yadda yadda"; $chars = "abc";
        $stuff = new etenil\Sanity\SString("yadda yadda");

        $this->equals(
            $stuff->addCSlashes($chars)->__tostring(),
            addcslashes($string, $chars)
        );
    }
}
