<?php
$grades=[85, 92, 78, 88, 95];
function descendingArry($grades){
  rsort ($grades);
    return $grades;
}
$arraySort=descendingArry($grades);
print_r($arraySort);
?>