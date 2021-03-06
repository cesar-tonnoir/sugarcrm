<?php
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2007 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
/**
 * THIS CLASS IS GENERATED BY MODULE BUILDER
 * PLEASE DO NOT CHANGE THIS CLASS
 * PLACE ANY CUSTOMIZATIONS IN oqc_ExternalContract
 */

require_once('include/SugarObjects/templates/issue/Issue.php');

class oqc_ExternalContract_sugar extends Issue {
	var $new_schema = true;
	var $module_dir = 'oqc_ExternalContract';
	var $object_name = 'oqc_ExternalContract';
	var $table_name = 'oqc_externalcontract';
		var $id;
		var $name;
		var $date_entered;
		var $date_modified;
		var $modified_user_id;
		var $modified_by_name;
		var $created_by;
		var $created_by_name;
		var $description;
		var $deleted;
		var $created_by_link;
		var $modified_user_link;
		var $assigned_user_id;
		var $assigned_user_name;
		var $assigned_user_link;
		var $oqc_externalcontract_number;
		var $type;
		var $status;
		var $priority;
		var $resolution;
		var $work_log;
		var $contractnumber;
		var $account_id;
		var $account;
		var $contact_id;
		var $clientcontactperson;
		var $contactperson;
		var $technicalcontactperson;
		var $bug_id;
		var $minimumduration;
		var $startdate;
		var $enddate;
		var $cancellationdate;
		var $externalcontracttype;
		var $externalcontractmatter;
		var $contractnumberclient;
		var $dmsnumber;
		var $abbreviation;
		var $payforefford;
		var $paytravelcosts;
		var $payextracosts;
		var $copydocumentationallowed;
		var $numberofdocumentationcopies;
		var $warranteedeadline;
		var $deliveryaddress;
		var $completionaddress;
		var $jsinjection;
		var $svnumbers;
		var $productnumber;
		var $costs;
		var $positions;
		var $monthsguaranteed;
		var $cancellationperiod;
		var $endperiod;
		var $versions;
		var $version;
		var $finalcosts;
		var $currency_id;
		var $minpayment;
		var $maxpayment;
		var $recordtoken;
		var $contract;
		var $service_description;
		var $specialproperties;
		var $quote;
		var $warn_in_months;
		var $already_notified;
		var $is_archived;
		var $new_with_id = false;
	




	function oqc_ExternalContract_sugar(){	
		parent::Issue();
	}
	
	function bean_implements($interface){
		switch($interface){
			case 'ACL': return true;
		}
		return false;
}
		
}
?>
