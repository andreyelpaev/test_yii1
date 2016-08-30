<h1>Search Users</h1>
<?php

$this->widget('zii.widgets.jui.CJuiAutoComplete',array(
    'name'=>'city',
    'source'=>$data,
    // additional javascript options for the autocomplete plugin
    'options'=>array(
        'minLength'=>'2',
    ),
    'htmlOptions'=>array(
        'style'=>'height:20px;',
    ),
));