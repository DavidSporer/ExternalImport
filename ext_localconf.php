<?php
// Register handler calls for Scheduler
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\Cobweb\ExternalImport\Task\AutomatedSyncTask::class] = array(
	'extension'			=> $_EXTKEY,
	'title'				=> 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/ExternalImport.xlf:scheduler.title',
	'description'		=> 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/ExternalImport.xlf:scheduler.description',
	'additionalFields'	=> \Cobweb\ExternalImport\Task\AutomatedSyncAdditionalFieldProvider::class
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Coweb.ExternalImport',
	'ExternalImport',
	array(
		'Module' => 'listSynchronizable,synchronize,viewConfiguration,newTask,createTask,editTask,updateTask,deleteTask',
		
	)
);
