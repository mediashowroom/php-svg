<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SVG\Nodes;

/**
 *
 * @author renepoepperl
 */
interface SVGContentAwareInterface {
    
    public function getContent();
    
    public function setContent($content);
}
