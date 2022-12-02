<?php
include("./includes/header.php");
include("./includes/sidebar.php");
include("./includes/conn.php");

?>
<div class="content">
<?php
include("./includes/navbar.php");
?>
<div class="main-content bg-light">

<div class="container">

<!-- title -->

        <h4>In patient data</h4>
        <a href=""data-toggle="modal" data-target="#addnew" class="btn btn-primary mb-3">ADD NEW</a>
        <table class="table"border="0">
                <thead>
                        <tr>
                                <th>First Name</th>
                                <th> Last Name</th>
                                <th> Gender</th>
                                <th>Age</th>
                                <th>contacts</th>
                                <th>Address</th>
                                <th>Actions</th>
                        </tr>
                </thead>
                <tbody>
                        <?php

                        $sql='select * from `patients-biodata`';
                        $res = mysqli_query($conn,$sql);


                        while($row = mysqli_fetch_array($res))
                        {
                          ?>
                          <!-- -->
                        <tr>
                                <td scope="row"><?= $row['firstname']?></td>
                                <td><?= $row['lastname']?></td>
                                <td><?= $row['gender']?></td>
                                 <td><?= $row['age']?></td>
                                <td><?= $row['contact']?></td>
                                <td><?= $row['address']?></td>
                                <td>
                                        <a href="EDIT" class="btn btn-success btn-sm">EDIT</a>
                                        <a href="d" class="btn btn-danger btn-sm">DELETE</a>
                                </td>

                                
                        </tr>
                        <?php

                              
                                }
                        

                                ?>
                        <tr>
                                <td scope="row"></td>
                                <td></td>
                                <td></td>
                        </tr>
                </tbody>
        </table>

</div>


</div>


<!-- Modal -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title text-center">Add new patient</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                        </button>
                        </div>
                        <div class="modal-body">
                                <!-- form -->
                                        <form action="savepatient.php" method="post">
                                                <div class="row">
                                                <div class="form-group col-6">
                                                  <label for="">First Name</label>
                                                  <input type="text" name="firstname" id="" class="form-control" placeholder="" required>
                                                  
                                                </div>

                                                <div class="form-group col-6">
                                                  <label for="">Last Name</label>
                                                  <input type="text" name="lastname" id="" class="form-control" placeholder="" required>
                                                  
                                                </div>
                                               
                                                
                                                </div>

                                                <div class="row">
                                                <div class="form-group col-6">
                                                  <label for="">Age</label>
                                                  <input type="number" name="age" id="" class="form-control" placeholder="" required>
                                                  
                                                </div>

                                                <div class="form-group col-6">
                                                  <label for="">Gender</label>
                                                  <select class="form-control" name="gender" id="">
                                                        <option value=""selected>Select Gender</option>
                                                  <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="others">Others</option>
                                                  </select>
                                                </div>
                                               
                                                
                                                </div>
                                                <div class="row">
                                                <div class="form-group col-6">
                                                  <label for="">Contacts</label>
                                                  <input type="text" name="contacts" id="" class="form-control" placeholder="" required>
                                                  
                                                </div>

                                                <div class="form-group col-6">
                                                  <label for="">Address</label>
                                                  <input type="text" name="address" id="" class="form-control" placeholder="" required>
                                                  
                                                </div>
                                               
                                                
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="submit" name="save"  class="btn btn-success btn-md" >Save</button>
                               
                                                </div>
                                        </form>

                                <!-- form -->
                        </div>
                        
                </div>
        </div>
</div>
        <!-- cards -->
</div>
      
        <!-- content -->
  <?php
  include('./includes/footer.php');
  ?>

  