<?php
 
// 准备要展示到网页的数据
$data = array( 
  array('id'=>1,'msg'=>'hello java'),
  array('id'=>2,'msg'=>'hello php'),
  array('id'=>3,'msg'=>'hello python'),
);
 
// 渲染到模板
// 实际项目一般是在html里渲染
// 这里演示 希望能看懂
 
ob_start(); // 开始输入缓冲控制
 
foreach($data as $item){
  echo $item['id'].'===>'.$item['msg'].'<br/>';
}
 
// 开始生成静态页面文件
if(file_put_contents('index.html',ob_get_contents())){
  echo 'success';
}else{
  echo 'error';
}
