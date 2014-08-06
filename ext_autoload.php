<?php

$extensionClasses = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('jpfaq') . '/Classes/';

$autoLoader = array(
	'Tx_Jpfaq_Controller_CategoryController' => $extensionClasses . 'Controller/CategoryController.php',
	'Tx_Jpfaq_Controller_QuestionController' => $extensionClasses . 'Controller/QuestionController.php',

	'Tx_Jpfaq_Domain_Model_Category' => $extensionClasses . 'Domain/Model/Category.php',
	'Tx_Jpfaq_Domain_Model_Question' => $extensionClasses . 'Domain/Model/Question.php',

	'Tx_Jpfaq_Domain_Repository_CategoryRepository' => $extensionClasses . 'Domain/Repository/CategoryRepository.php',
	'Tx_Jpfaq_Domain_Repository_QuestionRepository' => $extensionClasses . 'Domain/Repository/QuestionRepository.php',
);

return $autoLoader;

?>