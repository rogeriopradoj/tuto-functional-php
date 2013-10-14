<?php
namespace RogerioPradoJ\TutoFunctionalPHP;

class FunSetsTest extends \PHPUnit_Framework_TestCase
{
    private $funSets;

    protected function setUp()
    {
        $this->funSets = new FunSets();
    }

    public function testContainsIsImplemented()
    {
        // We caracterize a set by its contains function. It is the basic function of a set.

        $set = function ($element) {
            return true;
        };
        $this->assertTrue($this->funSets->contains($set, 100));
    }

    public function testSingletonSetContainsSingleElement()
    {
        // A singleton set is characterize by a function which passed to contains will return true for the single
        // element passed as its parameter. In other words, a singleton is a set with a single element.
        $singleton = $this->funSets->singletonSet(1);
        $this->assertTrue($this->funSets->contains($singleton, 1));
    }
}
