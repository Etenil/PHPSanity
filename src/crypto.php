<?php

class Crypto {
    function crc32(SString $string) {
        $this->string = crc32($string->getRaw());
        return $this;
    }

    function crypt(SString $string, $salt = null) {
        $this->string = crypt($this->string, $salt);
        return $this;
    }
}

