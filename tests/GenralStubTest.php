<?php 
class GeneralStubTest extends PHPUnit_Framework_TestCase
{
    private $_object;
    
    public function setUp()
    {
        parent::setUp();
        
        $this->_object = new GeneralStub();
    }
    
    public function testSum()
    {
        $result = $this->_object->sum(2, 2);
        
        $this->assertSame(4, $result);
    }
    
    public function testSumZero()
    {
        $this->markTestIncomplete("Devo ancora implementarlo...");
        $this->assertTrue(TRUE);
        
        $this->markTestSkipped("Saltalo");
        
        $this->assertTrue(false);
    }
}