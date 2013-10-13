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
}
