<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "sr_feuser_register".
 *
 * Auto generated | Identifier: 371dbeec4e83bbf46b21848e98ff33f5
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Front End User Registration',
	'description' => 'A self-registration variant of Kasper SkÃ¥rhÃ¸j\'s Front End User Admin extension.',
	'category' => 'plugin',
	'state' => 'stable',
	'uploadfolder' => true,
	'createDirs' => 'uploads/tx_srfeuserregister',
	'clearCacheOnLoad' => 1,
	'author' => 'Stanislas Rolland',
	'author_email' => 'typo3@sjbr.ca',
	'author_company' => 'SJBR',
	'version' => '4.0.2',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '6.2.4-7.6.99',
			'felogin' => '6.2.0-7.6.99',
			'rsaauth' => '6.2.0-7.6.99',
			'saltedpasswords' => '6.2.0-7.6.99',
			'static_info_tables' => '6.3.9-6.3.99',
		),
		'conflicts' => 
		array (
			'germandates' => '0.0.0-99.99.99',
			'rlmp_language_detection' => '0.0.0-99.99.99',
			'newloginbox' => '0.0.0-99.99.99',
			'kb_md5fepw' => '0.0.0-99.99.99',
			'srfeuserregister_t3secsaltedpw' => '0.0.0-99.99.99',
			'patch1822' => '0.0.0-99.99.99',
			'cc_random_image' => '0.0.0-99.99.99',
		),
		'suggests' => 
		array (
			'sr_freecap' => '2.3.0-2.3.99',
			'direct_mail' => '4.1.0-5.9.99',
		),
	),
	'clearcacheonload' => true,
	'_md5_values_when_last_written' => 'a:101:{s:9:"ChangeLog";s:4:"5a49";s:8:"Classes/";s:4:"d41d";s:16:"Classes/Captcha/";s:4:"d41d";s:27:"Classes/Captcha/Captcha.php";s:4:"f60b";s:36:"Classes/Captcha/CaptchaInterface.php";s:4:"0ccc";s:34:"Classes/Captcha/CaptchaManager.php";s:4:"fe30";s:27:"Classes/Captcha/Freecap.php";s:4:"3127";s:22:"Classes/Configuration/";s:4:"d41d";s:44:"Classes/Configuration/ConfigurationCheck.php";s:4:"bf0a";s:30:"Classes/Configuration/Reports/";s:4:"d41d";s:48:"Classes/Configuration/Reports/StatusProvider.php";s:4:"ff43";s:19:"Classes/Controller/";s:4:"d41d";s:47:"Classes/Controller/AbstractActionController.php";s:4:"ac01";s:45:"Classes/Controller/CreateActionController.php";s:4:"c18b";s:45:"Classes/Controller/DeleteActionController.php";s:4:"f65d";s:43:"Classes/Controller/EditActionController.php";s:4:"6c8e";s:47:"Classes/Controller/InfomailActionController.php";s:4:"36ba";s:47:"Classes/Controller/RegisterPluginController.php";s:4:"9c7c";s:47:"Classes/Controller/SetfixedActionController.php";s:4:"e0bc";s:15:"Classes/Domain/";s:4:"d41d";s:23:"Classes/Domain/Data.php";s:4:"f9eb";s:21:"Classes/Exception.php";s:4:"6952";s:14:"Classes/Hooks/";s:4:"d41d";s:42:"Classes/Hooks/RegistrationProcessHooks.php";s:4:"9e30";s:32:"Classes/Hooks/UsergroupHooks.php";s:4:"7136";s:13:"Classes/Mail/";s:4:"d41d";s:24:"Classes/Mail/Message.php";s:4:"0291";s:16:"Classes/Request/";s:4:"d41d";s:30:"Classes/Request/Parameters.php";s:4:"e598";s:17:"Classes/Security/";s:4:"d41d";s:35:"Classes/Security/Authentication.php";s:4:"09ed";s:32:"Classes/Security/SecuredData.php";s:4:"5004";s:32:"Classes/Security/SessionData.php";s:4:"cd14";s:36:"Classes/Security/StorageSecurity.php";s:4:"e721";s:41:"Classes/Security/TransmissionSecurity.php";s:4:"5e64";s:17:"Classes/Setfixed/";s:4:"d41d";s:33:"Classes/Setfixed/SetfixedUrls.php";s:4:"124f";s:16:"Classes/Utility/";s:4:"d41d";s:30:"Classes/Utility/CssUtility.php";s:4:"f695";s:31:"Classes/Utility/HashUtility.php";s:4:"5868";s:31:"Classes/Utility/HtmlUtility.php";s:4:"3bf3";s:39:"Classes/Utility/LocalizationUtility.php";s:4:"2c9d";s:30:"Classes/Utility/UrlUtility.php";s:4:"9612";s:13:"Classes/View/";s:4:"d41d";s:29:"Classes/View/AbstractView.php";s:4:"ba1a";s:30:"Classes/View/AfterSaveView.php";s:4:"a06f";s:27:"Classes/View/CreateView.php";s:4:"e32b";s:27:"Classes/View/DeleteView.php";s:4:"e6b6";s:25:"Classes/View/EditView.php";s:4:"94eb";s:22:"Classes/View/Email.php";s:4:"ba91";s:23:"Classes/View/Marker.php";s:4:"a62d";s:26:"Classes/View/PlainView.php";s:4:"6701";s:13:"composer.json";s:4:"5849";s:14:"Configuration/";s:4:"d41d";s:24:"Configuration/FlexForms/";s:4:"d41d";s:43:"Configuration/FlexForms/flexform_ds_pi1.xml";s:4:"f04a";s:18:"Configuration/TCA/";s:4:"d41d";s:48:"Configuration/TCA/fe_groups_language_overlay.php";s:4:"9be4";s:28:"Configuration/TCA/Overrides/";s:4:"d41d";s:58:"Configuration/TCA/Overrides/fe_groups_language_overlay.php";s:4:"8629";s:40:"Configuration/TCA/Overrides/fe_users.php";s:4:"faf1";s:44:"Configuration/TCA/Overrides/sys_template.php";s:4:"f981";s:42:"Configuration/TCA/Overrides/tt_content.php";s:4:"2d09";s:25:"Configuration/TypoScript/";s:4:"d41d";s:39:"Configuration/TypoScript/DefaultStyles/";s:4:"d41d";s:48:"Configuration/TypoScript/DefaultStyles/setup.txt";s:4:"fe3d";s:37:"Configuration/TypoScript/PluginSetup/";s:4:"d41d";s:50:"Configuration/TypoScript/PluginSetup/constants.txt";s:4:"ea0e";s:46:"Configuration/TypoScript/PluginSetup/setup.txt";s:4:"0bc2";s:16:"contributors.txt";s:4:"4984";s:4:"doc/";s:4:"d41d";s:14:"doc/manual.sxw";s:4:"9cde";s:21:"ext_conf_template.txt";s:4:"877d";s:12:"ext_icon.gif";s:4:"ad8f";s:17:"ext_localconf.php";s:4:"d369";s:14:"ext_tables.php";s:4:"f64d";s:14:"ext_tables.sql";s:4:"32d4";s:10:"Resources/";s:4:"d41d";s:18:"Resources/Private/";s:4:"d41d";s:27:"Resources/Private/.htaccess";s:4:"5cc8";s:27:"Resources/Private/Language/";s:4:"d41d";s:40:"Resources/Private/Language/locallang.xlf";s:4:"f8ae";s:43:"Resources/Private/Language/locallang_db.xlf";s:4:"e60b";s:50:"Resources/Private/Language/locallang_db_layout.xlf";s:4:"2949";s:53:"Resources/Private/Language/locallang_statusreport.xlf";s:4:"11b1";s:28:"Resources/Private/Templates/";s:4:"d41d";s:53:"Resources/Private/Templates/RegisterHtmlTemplate.html";s:4:"1a55";s:17:"Resources/Public/";s:4:"d41d";s:24:"Resources/Public/Images/";s:4:"d41d";s:39:"Resources/Public/Images/icon_delete.png";s:4:"c3ec";s:41:"Resources/Public/Images/internal_link.png";s:4:"7ef6";s:52:"Resources/Public/Images/internal_link_new_window.png";s:4:"2e30";s:28:"Resources/Public/JavaScript/";s:4:"d41d";s:48:"Resources/Public/JavaScript/FormRsaEncryption.js";s:4:"2b6d";s:48:"Resources/Public/JavaScript/jsfunc.updateform.js";s:4:"aef6";s:29:"Resources/Public/StyleSheets/";s:4:"d41d";s:40:"Resources/Public/StyleSheets/default.css";s:4:"3e35";s:41:"Resources/Public/StyleSheets/htmlmail.css";s:4:"69f8";s:27:"Resources/Public/TextFiles/";s:4:"d41d";s:41:"Resources/Public/TextFiles/attachment.txt";s:4:"cd3c";s:36:"Resources/Public/TextFiles/terms.txt";s:4:"0f15";}',
);

?>