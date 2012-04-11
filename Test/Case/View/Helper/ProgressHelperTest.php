<?php
App::uses('Controller', 'Controller');
App::uses('View', 'View');
App::uses('ProgressHelper', 'View/Helper');
/**
* Progress Helper Test
*/
class ProgressHelperTest extends CakeTestCase
{
	
	/**
	 * setUp function
	 *
	 * This method is called before every test method in a test case class. Setup Methods should initialize the objects needed for the test 
	 * @author alairock
	 **/
	public function setUp() {
		parent::setUp();
		$Controller = new Controller();
		$View = new View($Controller);
		$this->Progress = new ProgressHelper($View);
	}
	
	/**
	 * testBar
	 *
	 * We're gonna test our Progress bar helper.
	 * @author alairock
	 **/
	public function testBar() {
		
	}
}
