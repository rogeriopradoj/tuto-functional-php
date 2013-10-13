<?php
namespace RogerioPradoJ\TutoFunctionalPHP;

class FunSets
{
    public function contains($set, $elem)
    {
        return $set($elem);
    }
}
