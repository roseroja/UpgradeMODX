<?php
/**
 * en:properties.inc.php topic lexicon file for UpgradeMODX extra
 *
 * Copyright 2015 by Bob Ray <http://bobsguides.com>
 * Created on 08-21-2015
 *
 * UpgradeMODX is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * UpgradeMODX is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * UpgradeMODX; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package upgrademodx
 */

/**
 * Description
 * -----------
 * en:properties.inc.php topic lexicon strings
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package upgrademodx
 **/



/* Used in properties.upgrademodxwidget.snippet.php */
$_lang['ugm_groups_desc'] = 'group, or commma-separated list of groups, who will see the widget';
$_lang['ugm_hideWhenNoUpgrade_desc'] = 'Hide widget when no upgrade is available: default: No';
$_lang['ugm_interval_desc'] = 'Interval between checks -- Examples: 1 week, 3 days, 6 hours; default: 1 week';
$_lang['ugm_lastCheck_desc'] = 'Date and time of last check -- set automatically';
$_lang['ugm_latestVersion_desc'] = 'Latest version (at last check) -- set automatically';
$_lang['ugm_plOnly_desc'] = 'Show only pl (stable) versions; default: yes';
$_lang['ugm_versionsToShow_desc'] = 'Number of versions to show in upgrade form (not widget); default: 5';