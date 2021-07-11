
<?php

if(isset($_POST['ok-submit'])) {
  $task = mysqli_real_escape_string($conn, $_POST["task"]);
  /*
  $sql = "SELECT * from tasks";
  $result = $conn->query($sql)or
  die(mysqli_error($conn));

  if($result->num_rows > 0){
    $sql = "UPDATE tasks set task = '$task'";
    $result = $conn->query($sql)or
    die(mysqli_error($conn));

    if($result === TRUE){
      set_flash("Bitcoin rate updated successfully","success");
    }else{
      set_flash("There was error in updating bitcoin rate","danger");
    }
  }else{
    */
    $sql = "INSERT into tasks (task,pendingtask) values ('$task','Pending') ";
    $result = $conn->query($sql)or
    die(mysqli_error($conn));
    if($result === TRUE){

      set_flash("Task added successfully","success");
    }else{
      set_flash("There was error in adding task","danger");
    }
  //}

}


if(isset($_POST["ok-remove"])){
  $id = mysqli_real_escape_string($conn,$_POST["id"]);

    $sql = "DELETE from tasks where id = '$id' ";
    $result = $conn->query($sql)or
    die(mysqli_error($conn));

    if($result === TRUE){

      set_flash("Task deleted successfully","success");
    }else{
      set_flash("There was error in deleting task","danger");
    }


}



if(isset($_POST["ok-update"])){
  $id = mysqli_real_escape_string($conn,$_POST["id"]);

    $sql = "UPDATE tasks set pendingtask = '', completedtask = 'Completed' where id = '$id' ";
    $result = $conn->query($sql)or
    die(mysqli_error($conn));

    if($result === TRUE){

      set_flash("Task updated successfully","success");
    }else{
      set_flash("There was error in updating task","danger");
    }


}

?>