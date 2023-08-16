<?php
include 'db.php';
class user extends db
{


  public function get_all()
  {
    return $this->conn->query("SELECT * FROM users ORDER BY id DESC ")->fetch_all(MYSQLI_ASSOC);
  }

  public function get_one($id)
  {
    return $this->conn->query("SELECT * FROM users where id =$id ")->fetch_array(MYSQLI_ASSOC);
  }

  public function create($data)
  {
    $keys = implode(" ,", array_keys($data));
    $value = implode("', '", array_values($data));

    $sql = "INSERT INTO users ($keys) VALUES ( '$value')";

    return $this->conn->query($sql);
  }

  public function update($data,$id)
  {
   
extract($data);
    $sql = "UPDATE `users` SET "; 
    $sql.="`fullname`='$fullname',`email`='$email',`contact`='$contact',`address`='$address',`status`='$status'";
   $sql.=" WHERE id = $id";
  //  return $sql;
    return $this->conn->query($sql);
  }



  public function delete($id)
  {
    $sql = "DELETE FROM users WHERE id=$id";
    return $this->conn->query($sql);
  }
}
