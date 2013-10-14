<?php
namespace RogerioPradoJ\TutoFunctionalPHP;

class FunSets
{
    public function contains($set, $elem)
    {
        return $set($elem);
    }

    public function singletonSet($elem)
    {
        return function ($otherElem) use ($elem) {
            return $elem === $otherElem;
        };
    }
}
