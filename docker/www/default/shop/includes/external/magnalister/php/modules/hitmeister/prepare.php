<?php
/**
 * 888888ba                 dP  .88888.                    dP                
 * 88    `8b                88 d8'   `88                   88                
 * 88aaaa8P' .d8888b. .d888b88 88        .d8888b. .d8888b. 88  .dP  .d8888b. 
 * 88   `8b. 88ooood8 88'  `88 88   YP88 88ooood8 88'  `"" 88888"   88'  `88 
 * 88     88 88.  ... 88.  .88 Y8.   .88 88.  ... 88.  ... 88  `8b. 88.  .88 
 * dP     dP `88888P' `88888P8  `88888'  `88888P' `88888P' dP   `YP `88888P' 
 *
 *                          m a g n a l i s t e r
 *                                      boost your Online-Shop
 *
 * -----------------------------------------------------------------------------
 * $Id: checkin.php 1174 2011-07-30 17:49:04Z derpapst $
 *
 * (c) 2011 RedGecko GmbH -- http://www.redgecko.de
 *     Released under the MIT License (Expat)
 * -----------------------------------------------------------------------------
 */

defined('_VALID_XTC') or die('Direct Access to this location is not allowed.');

class HitmeisterPrepare extends MagnaCompatibleBase {

	protected $prepareSettings = array();

	public function __construct(&$params) {
		parent::__construct($params);

		$this->prepareSettings['selectionName'] = 'prepare';
		$this->resources['url']['mode'] = $this->prepareSettings['selectionName'];
	}
	
	protected function saveMatching() {
		#echo print_m($_POST, '$_POST');
		
		if (!array_key_exists('saveMatching', $_POST)) {
			return;
		}

	$fsk2porn = false;
	if (!isset($_POST['is_porn'])) {
		# je nach hitmeister.pornsetting
		# checkbox => _POST isset
		# none => 0
		# fsk18 => nachsehen
		if ('fsk18' == getDBConfigValue('hitmeister.pornsetting', $this->mpID, 'none')) {
			$fsk2porn = true;
		}
		$_POST['is_porn'] = 0;
	}
		# Lieferzeit - Matching vom Array ins SQL uebersetzen
		if ('m' == $_POST['shippingtime']) {
			$shippingTimeSql = 'CASE ';
			foreach (getDBConfigValue('hitmeister.shippingtimematching.values', $this->mpID, array()) as $shopShippingTime => $hitmeisterShippingTime) {
				$shippingTimeSql .=  'WHEN p.products_shippingtime = \''.$shopShippingTime.'\' THEN \''.$hitmeisterShippingTime.'\' ';
			}
			$shippingTimeSql .=  'ELSE \''.getDBConfigValue('hitmeister.shippingtime', $this->mpID).'\' END';
			if (!strpos($shippingTimeSql, 'WHEN')) {
				$shippingTimeSql = ', \''.getDBConfigValue('hitmeister.shippingtime', $this->mpID).'\'';
			}
		} else if (!empty($_POST['shippingtime'])) {
			$shippingTimeSql = '\''.$_POST['shippingtime'].'\'';
		} else {
			$shippingTimeSql = ', \''.getDBConfigValue('hitmeister.shippingtime', $this->mpID).'\'';
		}
		MagnaDB::gi()->query(eecho('
			REPLACE INTO '.TABLE_MAGNA_HITMEISTER_PREPARE.'
				SELECT DISTINCT ms.mpID, p.products_id, p.products_model, 
				       \''.MagnaDB::gi()->escape($_POST['mpCategory']).'\' AS mp_category_id,
				       \''.MagnaDB::gi()->escape($_POST['mpCategoryName']).'\' AS mp_category_name,
				       \''.MagnaDB::gi()->escape($_POST['condition_id']).'\' AS `condition_id`,
				       '.$shippingTimeSql.' AS shippingtime,
				       \''.MagnaDB::gi()->escape($_POST['is_porn']).'\' AS is_porn,
				       \''.MagnaDB::gi()->escape($_POST['age_rating']).'\' AS age_rating,
				       \''.MagnaDB::gi()->escape(strip_tags($_POST['comment'])).'\' AS `comment`,
					   \''.date('Y-m-d H:i:s').'\' AS PreparedTs
				  FROM '.TABLE_MAGNA_SELECTION.' ms, '.TABLE_PRODUCTS.' p
				 WHERE ms.mpID=\''.$this->mpID.'\' AND
				       ms.selectionname=\''.$this->prepareSettings['selectionName'].'\' AND
				       ms.session_id=\''.session_id().'\' AND
				       ms.pID=p.products_id
		', false));
		if ($fsk2porn) {
			MagnaDB::gi()->query(eecho('UPDATE '.TABLE_MAGNA_HITMEISTER_PREPARE.' hp, '.TABLE_MAGNA_SELECTION.' ms, '.TABLE_PRODUCTS.' p
				SET hp.is_porn = p.products_fsk18
				WHERE hp.products_id = p.products_id AND
					  ms.mpID=\''.$this->mpID.'\' AND
					  ms.selectionname=\''.$this->prepareSettings['selectionName'].'\' AND
					  ms.session_id=\''.session_id().'\' AND
					  ms.pID=p.products_id
		', false));
		}
		MagnaDB::gi()->delete(TABLE_MAGNA_SELECTION, array(
			'mpID' => $this->mpID,
			'selectionname' => $this->prepareSettings['selectionName'],
			'session_id' => session_id()
		));
	}
	
	protected function deleteMatching() {
		if (!(array_key_exists('unprepare', $_POST)) || empty($_POST['unprepare'])) {
			return;
		}
	 	$pIDs = MagnaDB::gi()->fetchArray('
			SELECT pID FROM '.TABLE_MAGNA_SELECTION.'
			 WHERE mpID=\''.$this->mpID.'\' AND
			       selectionname=\''.$this->prepareSettings['selectionName'].'\' AND
			       session_id=\''.session_id().'\'
		', true);

		if (empty($pIDs)) {
			return;
		}
		foreach ($pIDs as $pID) {
			$where = (getDBConfigValue('general.keytype', '0') == 'artNr')
				? array ('products_model' => MagnaDB::gi()->fetchOne('
							SELECT products_model
							  FROM '.TABLE_PRODUCTS.'
							 WHERE products_id='.$pID
						))
				: array ('products_id' => $pID);
			$where['mpID'] = $this->mpID;

			MagnaDB::gi()->delete(TABLE_MAGNA_HITMEISTER_PREPARE, $where);
			MagnaDB::gi()->delete(TABLE_MAGNA_SELECTION, array(
				'pID' => $pID,
				'mpID' => $this->mpID,
				'selectionname' => $this->prepareSettings['selectionName'],
				'session_id' => session_id()
			));
		}
		unset($_POST['unprepare']);
	}
	
	protected function processMatching() {
		if (($class = $this->loadResource('prepare', 'PrepareView')) === false) {
			if ($this->isAjax) {
				echo '{"error": "This is not supported"}';
			} else {
				echo 'This is not supported';
			}
			return;
		}
	
		$params = array();
		foreach (array('mpID', 'marketplace', 'marketplaceName', 'resources', 'prepareSettings') as $attr) {
			if (isset($this->$attr)) {
				$params[$attr] = &$this->$attr;
			}
		}
		
		$cMDiag = new $class($params);

		if ($this->isAjax) {
			echo $cMDiag->renderAjax();
		} else {
			$categories = MagnaDB::gi()->fetchArray('
				SELECT DISTINCT p2c.categories_id
				  FROM '.TABLE_MAGNA_SELECTION.' ms, '.TABLE_PRODUCTS_TO_CATEGORIES.' p2c
				 WHERE ms.mpID=\''.$this->mpID.'\' AND
				       ms.selectionname=\''.$this->prepareSettings['selectionName'].'\' AND
				       ms.session_id=\''.session_id().'\' AND
				       ms.pID=p2c.products_id
			', true);
			//echo print_m($categories, '$categories');
			$html = $cMDiag->process();
			echo $html;
		}
	}
	
	protected function processSelection() {
		if (($class = $this->loadResource('prepare', 'PrepareCategoryView')) === false) {
			if ($this->isAjax) {
				echo '{"error": "This is not supported"}';
			} else {
				echo 'This is not supported';
			}
			return;
		}
		$pV = new $class(null, $this->prepareSettings);
		if ($this->isAjax) {
			echo $pV->renderAjaxReply();
		} else {
			echo $pV->printForm();
		}
	}

	protected function processProductList() {
		if (($sClass = $this->loadResource('prepare', 'PrepareProductList')) === false) {
			if ($this->isAjax) {
				echo '{"error": "This is not supported"}';
			} else {
				echo 'This is not supported';
			}
			return;
		}
		$o = new $sClass();
		echo $o;
	}

	public function process() {
		$this->saveMatching();
		$this->deleteMatching();
		if (isset($_POST['prepare']) || (isset($_GET['where']) && ($_GET['where'] == 'catMatchView'))) {
			$this->processMatching();
		} else {
			if (defined('MAGNA_DEV_PRODUCTLIST') && MAGNA_DEV_PRODUCTLIST === true ) {
				$this->processProductList();
			} else {
				$this->processSelection();
			}
		}
	}
}
