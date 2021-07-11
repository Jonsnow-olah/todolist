<?php
include 'config.php';
include 'header.php';
include 'todo.php';
?>

<body>
	<div class="container">
		<h1 class="heading">To Do List</h1>
	  
  <?php flash();?>


  <form action="" method="post" role="form">

  <div class="" id="add-item">
  	<div class="">
      <input class="input" type="text" name="task" id="new-task">
  	</div>

	<button class="btn" name="ok-submit"> Add Task </button>
  
  </div>
  </form>

    <div class="">
  		<table width="600px" border>
        <tr>
          <th>Id</th>
          <th>Items</th>
          <th>Pending Tast</th>
          <th>Completed Task</th>
          <th>Action</th>
          <th>Removed</th>
        </tr>
      <?php
      $sql = "SELECT * from tasks ";
      $result = $conn->query($sql)or
      die(mysqli_error($conn));
      if($result->num_rows > 0){
        $sn = "";
        while($rs = $result->fetch_assoc()){
          
      ?>

      <tr>
      <td><?php echo ++$sn; ?></td>
      <td><?php echo $rs["task"]; ?></td>
      <td><?php echo $rs["pendingtask"]; ?></td>
      <td><?php echo $rs["completedtask"]; ?></td>
      <td>
          <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $rs["id"]; ?>" >
            <button name="ok-update">Update</button>
          </form>
      </td>
      <td>
          <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $rs["id"]; ?>" >
            <button name="ok-remove">X</button>
          </form>
      </td>
      </tr>

      <?php
        }
      }
      ?>
      </table>
    </div>


  
  </div>
</div>
	</div>
	<!-- <script src="js/script.js"></script> -->

</body>	
</html>
<script>
    if(window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}
</script>
