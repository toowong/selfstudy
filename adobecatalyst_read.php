<?php
/**
 * Created by PhpStorm.
 * User: yamated
 * Date: 2016/04/23
 * Time: 16:38
 */
//$filepath = "/root/work/userdatasample.csv";
//$file = new SplFileObject($filepath);
$file = new SplFileObject("../work/userdatasample.csv");
$file->setFlags(SplFileObject::READ_CSV);
foreach ($file as $row) {
    list($Hour, $Visitor_ID, $Customer_ID, $Geo) = $row;
    printf("A %s is a %s with %d legs\n", $Hour, $Visitor_ID, $Customer_ID, $Geo);
};

var_dump($row);
/*
Array
(
  [0]=>Array
    (
    [0]=>'foo1',
    [1]=>'foo2',
    [2]=>'foo3',
    )
  [1]=>Array
    (
    [0]=>'bar1',
    [1]=>'bar2',
    [2]=>'bar3',
    )
)
*/