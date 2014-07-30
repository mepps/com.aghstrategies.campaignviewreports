<?php

require_once 'campaignviewreports.civix.php';

/**
 * Implementation of hook_civicrm_config
 */
function campaignviewreports_civicrm_config(&$config) {
  _campaignviewreports_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 */
function campaignviewreports_civicrm_xmlMenu(&$files) {
  _campaignviewreports_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 */
function campaignviewreports_civicrm_install() {
  return _campaignviewreports_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 */
function campaignviewreports_civicrm_uninstall() {
  return _campaignviewreports_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 */
function campaignviewreports_civicrm_enable() {
  return _campaignviewreports_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 */
function campaignviewreports_civicrm_disable() {
  return _campaignviewreports_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 */
function campaignviewreports_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _campaignviewreports_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function campaignviewreports_civicrm_managed(&$entities) {
  $entities[] = array(
    'module' => 'com.aghstrategies.campaignviewreports',
    'name' => 'campaignactiviites',
    'entity' => 'ReportTemplate',
    'params' => array(
      'version' => 3,
      'label' => 'Campaign Activities Report',
      'description' => 'Longish description of the example report',
      'class_name' => 'CRM_Campaignviewreports_Report_Form_CampaignActivities',
      'report_url' => 'mymodule/mysbunt',
      'component' => 'CiviCampaign',
      ),
    );
  return _campaignviewreports_civix_civicrm_managed($entities);
}
