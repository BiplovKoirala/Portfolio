<?php if (!defined ('BASEPATH')) EXIT ('No direct script access allowed');

class Blogmodel extends CI_Model {

  public function __construct(){
    parent::__construct();
  }
 
function getPosts(){
  $this->db->select("blog_title,image,content, date");
  $this->db->from('blog');
  $query = $this->db->get();
  return $query->result();
}
 
}
?>
