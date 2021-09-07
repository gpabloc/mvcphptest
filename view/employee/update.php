<div class="card">
    <div class="card-header">
        Update Employee
    </div>
    <div class="card-body">
        <form action="" method="post">
        <div class="mb-3">
              <label for="txtName" class="form-label">Id:</label>
              <input type="text"
                class="form-control" readonly name="txtId" id="txtId" aria-describedby="helpId" placeholder="Id of employee" value="<?php echo $employees->id;?>">              
            </div>    
        <div class="mb-3">
              <label for="txtName" class="form-label">Nombre:</label>
              <input type="text"
                class="form-control" name="txtName" id="txtName" aria-describedby="helpId" placeholder="Name of employee" value="<?php echo $employees->name;?>" required>              
            </div>
            <div class="mb-3">
              <label for="txtEmail" class="form-label">Email:</label>
              <input type="email" class="form-control" name="txtEmail" id="txtEmail" aria-describedby="emailHelpId" placeholder="Email of employee" value="<?php echo $employees->email;?>" required>
              
            </div>
            <input name="" id="" required class="btn btn-success" type="submit" value="Update">
            <a class="btn btn-primary" href="?controller=employee&action=list">Cancel</a>
        </form>
    </div>
</div>