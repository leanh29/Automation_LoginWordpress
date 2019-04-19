<?php 
use Step\Acceptance\LI_02Step as Step_02;
class LI_10Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I, $scenario)
    {
        $I = new Step_02($scenario);
        $I ->LoginFuntion_02('leanhbb29');
    }
}
