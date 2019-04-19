<?php 
use Step\Acceptance\LI_12Step as Step_12;
class LI_23Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I, $scenario)
    {
        $I = new Step_12($scenario);
        $I ->LoginFution_12('leanh','12345');
    }
}
