<?php

$this->breadcrumbs=array(
    'All User Contacts',
);

//$this->menu=array(
//    array('label'=>'Create UserContact', 'url'=>array('create')),
//    array('label'=>'Manage UserContact', 'url'=>array('admin')),
//);
?>

<h1>All User Contacts</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
)); ?>
