<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SVG\Nodes\Data;

use SVG\Nodes\SVGNode;

/**
 * Description of SVGGradientStart
 *
 * @author renepoepperl
 */
class SVGGradientStop extends SVGNode {
    
    const TAG_NAME = 'stop';
    
    protected $offset;
    
    public function __construct($offset = "") {
        $this->offset = $offset;
        
        $this->setAttributeOptional("offset", $offset);
    }

    public function getOffset() {
        return $this->offset;
    }

    public function setOffset($offset) {
        $this->offset = $offset;
        $this->setAttributeOptional("offset", $offset);
        return $this;
    }

        
    public function rasterize(\SVG\Rasterization\SVGRasterizer $rasterizer) {
        
    }

}
