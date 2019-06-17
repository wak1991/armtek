<?php

class Model_Main extends Model
{
	public function get_data($start, $perpage)
	{
    $sort = $_GET['sort'];

    switch ($sort)
    {
     case 'title-asc':
     $sorting = 'ORDER BY title ASC';
     break;

     case 'title-desc':
     $sorting = 'ORDER BY title DESC';
     break;

     case 'weight-asc':
     $sorting = 'ORDER BY weight ASC';
     break;

     case 'weight-desc':
     $sorting = 'ORDER BY weight DESC';
     break;

     case 'volume-asc':
     $sorting = 'ORDER BY volume ASC';
     break;

     case 'volume-desc':
     $sorting = 'ORDER BY volume DESC';
     break;

     case 'length-asc':
     $sorting = 'ORDER BY length ASC';
     break;

     case 'length-desc':
     $sorting = 'ORDER BY length DESC';
     break;

     case 'width-asc':
     $sorting = 'ORDER BY width ASC';
     break;

     case 'width-desc':
     $sorting = 'ORDER BY width DESC';
     break;

     case 'height-asc':
     $sorting = 'ORDER BY height ASC';
     break;

     case 'height-desc':
     $sorting = 'ORDER BY height DESC';
     break;

     default:
     $sorting = 'ORDER BY title ASC';
   }

   $sql = $this->db->query("SELECT * FROM parts_list $sorting LIMIT $start, $perpage");
   return $sql;
 }

 public function get_post($id)
 {
  return $this->db->row("SELECT * FROM parts_list WHERE id = $id");
}

public function save_post($id, $data)
{
  $title = $data['title'];
  $weight = $data['weight'];
  $volume = $data['volume'];
  $length = $data['length'];
  $width = $data['width'];
  $height = $data['height'];
  $img = $data['img'];
  $this->db->query("UPDATE parts_list SET title = '$title', weight = $weight, volume = $volume, length = $length, width = $width, height = $height, img = '$img' WHERE id = $id");
}

public function load_img($id, $img)
{
  $this->db->query("UPDATE parts_list SET img = '$img' WHERE id = $id");
}

public function create_post($data)
{
  $title = $data['title'];
  $weight = $data['weight'];
  $volume = $data['volume'];
  $length = $data['length'];
  $width = $data['width'];
  $height = $data['height'];
  $this->db->query("INSERT INTO parts_list (title, weight, volume, length, width, height) VALUES ('$title', $weight, $volume, $length, $width, $height)");
  $this->db->lastInsertId();
}
}