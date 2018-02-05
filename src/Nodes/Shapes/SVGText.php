<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SVG\Nodes\Shapes;

use SVG\Nodes\SVGContentAwareInterface;
use SVG\Nodes\SVGNode;
use SVG\Rasterization\SVGRasterizer;

/**
 * Description of SVGText
 *
 * @author renepoepperl
 */
class SVGText extends SVGNode implements SVGContentAwareInterface {
    
    const TAG_NAME = 'text';
    
    protected $x;
    
    protected $y;
    
    protected $content = "";

    public function __construct($x, $y, $text, $color = "#000", $textAnchor = "start")
    {
        parent::__construct();

        $this->setAttributeOptional('x', $x);
        $this->setAttributeOptional('y', $y);
        $this->setAttributeOptional('style', 'fill:' . $color);
        $this->setAttributeOptional('text-anchor', $textAnchor);
        
        $this->setContent($text);
    }
    
    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    public function setX($x) {
        $this->x = $x;
        return $this;
    }

    public function setY($y) {
        $this->y = $y;
        return $this;
    }

        
    public function rasterize(SVGRasterizer $rasterizer)
    {
        if ($this->getComputedStyle('display') === 'none') {
            return;
        }

        $visibility = $this->getComputedStyle('visibility');
        if ($visibility === 'hidden' || $visibility === 'collapse') {
            return;
        }

        $rasterizer->render('text', array(
            'x'         => $this->getX(),
            'y'         => $this->getY()
        ), $this);
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
        
        return $this;
    }

}
