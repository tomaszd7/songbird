<?php


class AppBundleCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function InstallationTest(AcceptanceTester $I)
    {
        $I->wantTo('CHeck if SYmfony is installed correctly');
        $I->amOnPage('/');
        $I->see('Welcome to');             
    }
    /** 
     * check that homepage is not valid
     * @param AcceptanceTester $I
     */
    
    public function RemovalTest(AcceptanceTester $I) 
    {
        $I->wantTo('Check if / is not active');
        $I->amOnPage('/');
        $I->see('404 Not Found');
    }
}
