<?php
    $name = array('Nam', 'Khánh', 'Bình', 'Hậu' , 'Tuấn');

    var_dump(in_array('name',$name)) ;

    $permission = array('view' => $name );
    
     var_dump(in_array('Hậu', $name));
    // Kết quả là true

    var_dump(in_array('Zent', $name));
    // Kết quả là false
?>