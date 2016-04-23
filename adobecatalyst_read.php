<?php
/**
 * Created by PhpStorm.
 * User: yamated
 * Date: 2016/04/23
 * Time: 16:38
 */
$filepath="/root/work/userdatasample.csv";
$file = new SplFileObject($filepath);
$file->setFlags(SplFileObject::READ_CSV);
foreach ($file as $line) {
    //終端の空行を除く処理　空行の場合に取れる値は後述
    if(is_null($line[0]){
    $records[] = $line});
}

var_dump($records);
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