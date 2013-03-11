<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2011 Jacco van der Post <jacco@typo3-webdesign.nl>, iD Webdesign
*  			
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Testcase for class Tx_Jpfaq_Domain_Model_Question.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage jpFAQ
 * 
 * @author Jacco van der Post <jacco@typo3-webdesign.nl>
 */
class Tx_Jpfaq_Domain_Model_QuestionTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Jpfaq_Domain_Model_Question
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Jpfaq_Domain_Model_Question();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getQuestionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setQuestionForStringSetsQuestion() { 
		$this->fixture->setQuestion('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getQuestion()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnswerReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAnswerForStringSetsAnswer() { 
		$this->fixture->setAnswer('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAnswer()
		);
	}
	
	/**
	 * @test
	 */
	public function getCategoryReturnsInitialValueForObjectStorageContainingTx_Jpfaq_Domain_Model_Category() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getCategory()
		);
	}

	/**
	 * @test
	 */
	public function setCategoryForObjectStorageContainingTx_Jpfaq_Domain_Model_CategorySetsCategory() { 
		$category = new Tx_Jpfaq_Domain_Model_Category();
		$objectStorageHoldingExactlyOneCategory = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCategory->attach($category);
		$this->fixture->setCategory($objectStorageHoldingExactlyOneCategory);

		$this->assertSame(
			$objectStorageHoldingExactlyOneCategory,
			$this->fixture->getCategory()
		);
	}
	
	/**
	 * @test
	 */
	public function addCategoryToObjectStorageHoldingCategory() {
		$category = new Tx_Jpfaq_Domain_Model_Category();
		$objectStorageHoldingExactlyOneCategory = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCategory->attach($category);
		$this->fixture->addCategory($category);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneCategory,
			$this->fixture->getCategory()
		);
	}

	/**
	 * @test
	 */
	public function removeCategoryFromObjectStorageHoldingCategory() {
		$category = new Tx_Jpfaq_Domain_Model_Category();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($category);
		$localObjectStorage->detach($category);
		$this->fixture->addCategory($category);
		$this->fixture->removeCategory($category);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getCategory()
		);
	}
	
}
?>