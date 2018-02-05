<?php

namespace SVG\Nodes\Structures;

use SVG\Nodes\SVGNodeContainer;

/**
 * Represents the SVG tag 'g'.
 */
class SVGLinearGradient extends SVGNodeContainer
{
    const TAG_NAME = 'linearGradient';
    
    protected $x1, $y1, $x2, $y2;
    
    protected $gradientUnits;

    public function __construct($x1 = "", $y1 = "", $x2 = "", $y2 = "", $gradientUnits = "") {
        parent::__construct();
        
        $this->setX1($x1);
        $this->setY1($y1);
        $this->setX2($x2);
        $this->setY2($y2);
        $this->setGradientUnits($gradientUnits);
    }

    public function getX1() {
        return $this->x1;
    }

    public function getY1() {
        return $this->y1;
    }

    public function getX2() {
        return $this->x2;
    }

    public function getY2() {
        return $this->y2;
    }

    public function setX1($x1) {
        $this->x1 = $x1;
        $this->setAttributeOptional("x1", $x1);
        return $this;
    }

    public function setY1($y1) {
        $this->y1 = $y1;
        $this->setAttributeOptional("y1", $y1);
        return $this;
    }

    public function setX2($x2) {
        $this->x2 = $x2;
        $this->setAttributeOptional("x2", $x2);
        return $this;
    }

    public function setY2($y2) {
        $this->y2 = $y2;
        $this->setAttributeOptional("y2", $y2);
        return $this;
    }

    public function getGradientUnits() {
        return $this->gradientUnits;
    }

    public function setGradientUnits($gradientUnits) {
        $this->gradientUnits = $gradientUnits;
        $this->setAttributeOptional("gradientUnits", $gradientUnits);
        return $this;
    }


}
