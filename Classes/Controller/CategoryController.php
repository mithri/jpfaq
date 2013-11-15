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
 * Controller for the Category object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_Jpfaq_Controller_CategoryController extends Tx_Extbase_MVC_Controller_ActionController {
	
	/**
	 * categoryRepository
	 * 
	 * @var Tx_Jpfaq_Domain_Repository_CategoryRepository
         * @inject
	 */
	protected $categoryRepository;

	/**
	 * Displays a single Category
	 *
	 * @param Tx_Jpfaq_Domain_Model_Category $category the Category to display
	 * @return string The rendered view
	 */
	public function showAction(Tx_Jpfaq_Domain_Model_Category $category) {
		$this->view->assign('category', $category);
	}
	
		
	/**
	 * Displays all Categories
	 *
	 * @return string The rendered list view
	 */
	public function listAction() {
		$categories = $this->categoryRepository->findAll();
		$this->view->assign('categories', $categories);
	}
	
}
?>