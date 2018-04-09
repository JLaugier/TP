<?php
use AppBundle\Entity\Loisir;
class MyTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
$loisir=new Loisir();
$loisir->setName("Equitation");
$this->assertEquals("Equitation",$loisir->getName());
    }
}