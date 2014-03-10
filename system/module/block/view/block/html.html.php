<?php
/**
 * The html block form view file of block module of chanzhiEPS.
 *
 * @copyright   Copyright 2013-2013 青岛息壤网络信息有限公司 (QingDao XiRang Network Infomation Co,LTD www.xirangit.com)
 * @license     LGPL (http://www.gnu.org/licenses/lgpl.html)
 * @author      Xiying Guan <guanxiying@xirangit.com>
 * @package     block
 * @version     $Id$
 * @link        http://www.chanzhi.org
*/
?>
<?php $block->content = json_decode($block->content);?>
<div id="block<?php echo $block->id;?>" class='panel panel-block'>
  <div class='panel-heading'>
    <h4><?php echo $icon . $block->title;?></h4>
  </div>
  <div class='panel-body'>
    <?php echo $block->content->content;?>
  </div>
</div>
