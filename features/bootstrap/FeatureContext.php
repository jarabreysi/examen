<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Tests\TestCase;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends TestCase implements Context
{
    protected $content;
    private $name;
    private $name2;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct(){}

    /**
     * @Given  I am on pelicula :pelicula
     */
    public function iVisitLogin($pelicula)
    {
        $this->name="¿usted consulto una pelicula ?";
    }
    /**
     * @Then I should see the pelicula :pelicula
     */
    public function iShouldSeeTheLogin($pelicula)
    {
        //$this->assertEquals($text, $this->content);
        $this->assertEquals($this->name,$pelicula);
    }


    




}
