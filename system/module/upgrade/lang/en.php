<?php
/**
 * The upgrade module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2013-2013 青岛息壤网络信息有限公司 (QingDao XiRang Network Infomation Co,LTD www.xirangit.com)
 * @license     LGPL (http://www.gnu.org/licenses/lgpl.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     upgrade
 * @version     $Id: en.php 5119 2013-07-12 08:06:42Z wyd621@gmail.com $
 * @link        http://www.chanzhi.org
 */
$lang->upgrade->common  = 'Upgrade';

$lang->upgrade->result  = 'Result';
$lang->upgrade->fail    = 'Fail';
$lang->upgrade->success = 'Success';
$lang->upgrade->tohome  = 'Go to index';

$lang->upgrade->index         = 'Upgrad chanzhiEPS.';
$lang->upgrade->backup        = 'Backup';
$lang->upgrade->selectVersion = 'Select version to upgrade from';
$lang->upgrade->confirm       = 'Confirm the SQL to excute.';
$lang->upgrade->execute       = 'Execute';
$lang->upgrade->next          = 'Next';

$lang->upgrade->setOkFile = <<<EOT
<div class='alert'>
<h5>For security reason, please do these steps. </h5>
<p>Create "<code>%s</code>" file. If this file exists already, reopen it and save again.</p>
</div>
EOT;

$lang->upgrade->backupData = <<<EOT
<pre>
<strong>Using phpMyAdmin or mysqldump to backup database.</strong>
<code class='red'>$ mysqldump -u %s</span> -p%s %s > chanzhi.sql</code>
</pre>
EOT;

$lang->upgrade->versionNote = "Please the version to upgrade.";

$lang->upgrade->fromVersions['1_1']   = '1.1.stable';
$lang->upgrade->fromVersions['1_2']   = '1.2.stable';
$lang->upgrade->fromVersions['1_3']   = '1.3.stable';
$lang->upgrade->fromVersions['1_4']   = '1.4.stable';
$lang->upgrade->fromVersions['1_5']   = '1.5.stable';
$lang->upgrade->fromVersions['1_6']   = '1.6.stable';
$lang->upgrade->fromVersions['1_7']   = '1.7.stable';
$lang->upgrade->fromVersions['1_8']   = '1.8.stable';
$lang->upgrade->fromVersions['2_0']   = '2.0.stable';
$lang->upgrade->fromVersions['2_0_1'] = '2.0.1.stable';
