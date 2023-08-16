<?php
include 'db.php';

class doctor extends db
{

  public function get_all()
  {
    return $this->conn->query("SELECT * FROM doctors ORDER BY id DESC ")->fetch_all(MYSQLI_ASSOC);
  }

  public function get_one($id)
  {
    return $this->conn->query("SELECT * FROM doctors where id =$id ")->fetch_array(MYSQLI_ASSOC);
  }


  public function create($data)
  {
    $keys = implode(" ,", array_keys($data));
    $value = implode("', '", array_values($data));

    $sql = "INSERT INTO doctors ($keys) VALUES ( '$value')";

    return $this->conn->query($sql);
  }



  public function delete($id)
  {
    $sql = "DELETE FROM doctors WHERE id=$id";
    return $this->conn->query($sql);
  }
}
