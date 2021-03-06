<?php
require 'src/StarAngles.php';
require 'src/StarLines.php';

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
    *@When I request the angle measurement for a star with :sides sides
    */
    public function askAngle($sides){
      $this->angle = StarAngles::calculate($sides);
    }

    /**
    *@Then I should get an angle of :angle
    */
    public function checkAngle($angle){
      if($this->angle != $angle){
        throw new Exception('Angle has not been properly calculated');
      }
    }

    /**
    *@When I request the length for :sides sides and a diameter of :diameter
    */
    public function askLine($sides, $diameter){
      $this->length = StarLines::calculate($sides, $diameter);
    }
    /**
    *@Then I should get a length of :length
    */
    public function checkline($length){
      if($this->length != $length){
        throw new Exception('Length has not been properly calculated');
      }
    }
}
