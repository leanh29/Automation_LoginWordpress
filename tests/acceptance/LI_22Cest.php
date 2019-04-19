<?php 
use Step\Acceptance\LI_11Step as Step_11;
class LI_22Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I, $secranio)
    {
        $I = new Step_11($secranio);
        $I->LoginFuntion_11('leanhanh','leanhbb290109');
    }
}
