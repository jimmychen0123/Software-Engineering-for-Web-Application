<?php

//this function allows single post page to be used by both news and blog
function get_table($page, $id){

  if($page == 'news'){
    $query = "SELECT * FROM news WHERE ID = ".$id;
  }elseif($page == 'blog'){
    $query = "SELECT * FROM blog WHERE blogId = ".$id;
  }else{
    $query = "SELECT * FROM blog WHERE blogId = ".$id;
  }
  return $query;
}


 ?>
