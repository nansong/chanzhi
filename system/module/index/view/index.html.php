<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/treeview.html.php';?>

<div id='focus' class='block-list'>
  <div class='row' data-default-grid='12'><?php $this->block->printRegion($layouts, 'index_index', 'header', true);?></div>
  <div class='row' data-default-grid='4'><?php $this->block->printRegion($layouts, 'index_index', 'middle', true);?></div>
  <div class='row' data-default-grid='6'><?php $this->block->printRegion($layouts, 'index_index', 'footer', true);?></div>
</div>
<?php include '../../common/view/footer.html.php';?>
