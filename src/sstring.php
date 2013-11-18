<?php

namespace etenil\Sanity;

class SString {
    protected $string;

    function __construct($value = "") {
        $this->string = $value;
    }
    
    function __tostring() {
        return $this->string;
    }

    function addCSlashes($charlist) {
        $this->string = addcslashes($this->string, $charlist);
        return $this;
    }

    function addSlashes() {
        $this->string = addslashes($this->string);
        return $this;
    }

    function bin2hex() {
        $this->string = bin2hex($this->string);
        return $this;
    }

    static function chr($ascii) {
        return new self(chr($ascii));
    }

    function chunkSplit($chunklen = 76, $end = "\r\n") {
        $this->string = chunk_split($this->string, $chunklen, $end);
        return $this;
    }

    function convertCyrString($from, $to) {
        $this->string = convert_cyr_string($this->string, $from, $to);
        return $this;
    }

    function convertUudecode() {
        $this->string = convert_uudecode($this->string);
        return $this;
    }

    function convertUuencode() {
        $this->string = convert_uuencode($this->string);
        return $this;
    }

    function countChars($mode = 0) {
        $this->string = count_chars($this->string, $mode);
        return $this;
    }
    

    function explode($delimiter) {
        $this->string = explode($delimiter, $this->string);
        return $this;
    }

    function fprintf() {
        $this->string = fprintf($this->string);
        return $this;
    }

    function get_html_translation_table() {
        $this->string = get_html_translation_table($this->string);
        return $this;
    }

    function hebrev() {
        $this->string = hebrev($this->string);
        return $this;
    }

    function hebrevc() {
        $this->string = hebrevc($this->string);
        return $this;
    }

    function hex2bin() {
        $this->string = hex2bin($this->string);
        return $this;
    }

    function html_entity_decode() {
        $this->string = html_entity_decode($this->string);
        return $this;
    }

    function htmlentities() {
        $this->string = htmlentities($this->string);
        return $this;
    }

    function htmlspecialchars_decode() {
        $this->string = htmlspecialchars_decode($this->string);
        return $this;
    }

    function htmlspecialchars() {
        $this->string = htmlspecialchars($this->string);
        return $this;
    }

    function implode() {
        $this->string = implode($this->string);
        return $this;
    }

    function join() {
        $this->string = join($this->string);
        return $this;
    }

    function lcfirst() {
        $this->string = lcfirst($this->string);
        return $this;
    }

    function levenshtein() {
        $this->string = levenshtein($this->string);
        return $this;
    }

    function localeconv() {
        $this->string = localeconv($this->string);
        return $this;
    }

    function ltrim() {
        $this->string = ltrim($this->string);
        return $this;
    }

    static function md5_file($path) {
        return new self(md5_file($path));
    }

    function md5() {
        $this->string = md5($this->string);
        return $this;
    }

    function metaphone() {
        $this->string = metaphone($this->string);
        return $this;
    }

    function money_format() {
        $this->string = money_format($this->string);
        return $this;
    }

    function nl_langinfo() {
        $this->string = nl_langinfo($this->string);
        return $this;
    }

    function nl2br() {
        $this->string = nl2br($this->string);
        return $this;
    }

    function number_format() {
        $this->string = number_format($this->string);
        return $this;
    }

    function ord() {
        $this->string = ord($this->string);
        return $this;
    }

    function parse_str() {
        $this->string = parse_str($this->string);
        return $this;
    }

    function printout() {
        $this->string = print($this->string);
        return $this;
    }

    function printf() {
        $this->string = printf($this->string);
        return $this;
    }

    function quoted_printable_decode() {
        $this->string = quoted_printable_decode($this->string);
        return $this;
    }

    function quoted_printable_encode() {
        $this->string = quoted_printable_encode($this->string);
        return $this;
    }

    function quotemeta() {
        $this->string = quotemeta($this->string);
        return $this;
    }

    function rtrim() {
        $this->string = rtrim($this->string);
        return $this;
    }

    function setlocale() {
        $this->string = setlocale($this->string);
        return $this;
    }

    static function sha1_file($path) {
        return new self(sha1_file($path));
    }

    function sha1() {
        $this->string = sha1($this->string);
        return $this;
    }

    function similar_text() {
        $this->string = similar_text($this->string);
        return $this;
    }

    function soundex() {
        $this->string = soundex($this->string);
        return $this;
    }

    function sprintf() {
        $this->string = sprintf($this->string);
        return $this;
    }

    function sscanf() {
        $this->string = sscanf($this->string);
        return $this;
    }

    function str_getcsv() {
        $this->string = str_getcsv($this->string);
        return $this;
    }

    function str_ireplace() {
        $this->string = str_ireplace($this->string);
        return $this;
    }

    function str_pad() {
        $this->string = str_pad($this->string);
        return $this;
    }

    function str_repeat() {
        $this->string = str_repeat($this->string);
        return $this;
    }

    function str_replace() {
        $this->string = str_replace($this->string);
        return $this;
    }

    function str_rot13() {
        $this->string = str_rot13($this->string);
        return $this;
    }

    function str_shuffle() {
        $this->string = str_shuffle($this->string);
        return $this;
    }

    function str_split() {
        $this->string = str_split($this->string);
        return $this;
    }

    function str_word_count() {
        $this->string = str_word_count($this->string);
        return $this;
    }

    function strcasecmp() {
        $this->string = strcasecmp($this->string);
        return $this;
    }

    function strchr() {
        $this->string = strchr($this->string);
        return $this;
    }

    function strcmp() {
        $this->string = strcmp($this->string);
        return $this;
    }

    function strcoll() {
        $this->string = strcoll($this->string);
        return $this;
    }

    function strcspn() {
        $this->string = strcspn($this->string);
        return $this;
    }

    function strip_tags() {
        $this->string = strip_tags($this->string);
        return $this;
    }

    function stripcslashes() {
        $this->string = stripcslashes($this->string);
        return $this;
    }

    function stripos() {
        $this->string = stripos($this->string);
        return $this;
    }

    function stripslashes() {
        $this->string = stripslashes($this->string);
        return $this;
    }

    function stristr() {
        $this->string = stristr($this->string);
        return $this;
    }

    function strlen() {
        $this->string = strlen($this->string);
        return $this;
    }

    function strnatcasecmp() {
        $this->string = strnatcasecmp($this->string);
        return $this;
    }

    function strnatcmp() {
        $this->string = strnatcmp($this->string);
        return $this;
    }

    function strncasecmp() {
        $this->string = strncasecmp($this->string);
        return $this;
    }

    function strncmp() {
        $this->string = strncmp($this->string);
        return $this;
    }

    function strpbrk() {
        $this->string = strpbrk($this->string);
        return $this;
    }

    function strpos() {
        $this->string = strpos($this->string);
        return $this;
    }

    function strrchr() {
        $this->string = strrchr($this->string);
        return $this;
    }

    function strrev() {
        $this->string = strrev($this->string);
        return $this;
    }

    function strripos() {
        $this->string = strripos($this->string);
        return $this;
    }

    function strrpos() {
        $this->string = strrpos($this->string);
        return $this;
    }

    function strspn() {
        $this->string = strspn($this->string);
        return $this;
    }

    function strstr() {
        $this->string = strstr($this->string);
        return $this;
    }

    function strtok() {
        $this->string = strtok($this->string);
        return $this;
    }

    function strtolower() {
        $this->string = strtolower($this->string);
        return $this;
    }

    function strtoupper() {
        $this->string = strtoupper($this->string);
        return $this;
    }

    function strtr() {
        $this->string = strtr($this->string);
        return $this;
    }

    function substr_compare() {
        $this->string = substr_compare($this->string);
        return $this;
    }

    function substr_count() {
        $this->string = substr_count($this->string);
        return $this;
    }

    function substr_replace() {
        $this->string = substr_replace($this->string);
        return $this;
    }

    function substr() {
        $this->string = substr($this->string);
        return $this;
    }

    function trim() {
        $this->string = trim($this->string);
        return $this;
    }

    function ucfirst() {
        $this->string = ucfirst($this->string);
        return $this;
    }

    function ucwords() {
        $this->string = ucwords($this->string);
        return $this;
    }

    function vfprintf() {
        $this->string = vfprintf($this->string);
        return $this;
    }

    function vprintf() {
        $this->string = vprintf($this->string);
        return $this;
    }

    function vsprintf() {
        $this->string = vsprintf($this->string);
        return $this;
    }

    function wordwrap() {
        $this->string = wordwrap($this->string);
        return $this;
    }
}

