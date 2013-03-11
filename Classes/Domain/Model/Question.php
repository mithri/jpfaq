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
*  the Free Software Foundation; either version 3 of the License, or
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
 * Question
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_Jpfaq_Domain_Model_Question extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * question
	 *
	 * @var string $question
	 * @validate NotEmpty
	 */
	protected $question;

	/**
	 * answer
	 *
	 * @var string $answer
	 * @validate NotEmpty
	 */
	protected $answer;

	/**
	 * category
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Jpfaq_Domain_Model_Category> $category
	 */
	protected $category;

	/**
	 * The constructor.
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		* Do not modify this method!
		* It will be rewritten on each save in the kickstarter
		* You may modify the constructor of this class instead
		*/
		$this->category = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Setter for question
	 *
	 * @param string $question question
	 * @return void
	 */
	public function setQuestion($question) {
		$this->question = $question;
	}

	/**
	 * Getter for question
	 *
	 * @return string question
	 */
	public function getQuestion() {
		return $this->question;
	}

	/**
	 * Setter for answer
	 *
	 * @param string $answer answer
	 * @return void
	 */
	public function setAnswer($answer) {
		$this->answer = $answer;
	}

	/**
	 * Getter for answer
	 *
	 * @return string answer
	 */
	public function getAnswer() {
		return $this->answer;
	}

	/**
	 * Setter for category
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Jpfaq_Domain_Model_Category> $category category
	 * @return void
	 */
	public function setCategory(Tx_Extbase_Persistence_ObjectStorage $category) {
		$this->category = $category;
	}

	/**
	 * Getter for category
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Jpfaq_Domain_Model_Category> category
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Adds a Category
	 *
	 * @param Tx_Jpfaq_Domain_Model_Category the Category to be added
	 * @return void
	 */
	public function addCategory(Tx_Jpfaq_Domain_Model_Category $category) {
		$this->category->attach($category);
	}

	/**
	 * Removes a Category
	 *
	 * @param Tx_Jpfaq_Domain_Model_Category the Category to be removed
	 * @return void
	 */
	public function removeCategory(Tx_Jpfaq_Domain_Model_Category $categoryToRemove) {
		$this->category->detach($categoryToRemove);
	}

}
?>