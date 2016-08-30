<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Users All',
);
//
//$this->menu=array(
//    array('label'=>'Create User', 'url'=>array('create')),
//    array('label'=>'Manage User', 'url'=>array('admin')),
//);
?>

<h1>Users All</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns' => array(
        'firstname',
        'surname',
        'user.phone',
        'user.email'
    )

)); ?>
