<?php
/**
 * @package    local
 * @subpackage up1_metadata
 * @copyright  2012-2016 Silecs {@link http://www.silecs.info/societe}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define('CLI_SCRIPT', true);

require(dirname(dirname(dirname(__DIR__))).'/config.php'); // global moodle config file.
require_once($CFG->libdir.'/clilib.php');      // cli only functions
require_once($CFG->dirroot.'/local/up1_metadata/lib.php');
require_once($CFG->dirroot.'/local/up1_metadata/datalib.php');
require_once($CFG->dirroot.'/local/roftools/roflib.php');
require_once($CFG->dirroot.'/local/up1_metadata/libupgrade.php');

// upgrade_categoriesbisrof();

add_urlfixe();
