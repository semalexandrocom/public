<?php


interface ParserInterface{
    /*
    *   @param string $url    
    *   @param string $tag
    *   @return array
    */
    public function process($url, $tag);
    
}