<div class="card">
    <div class="card-header">
        Add Employee
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="txtName" class="form-label">Name:</label>
              <input type="text" class="form-control"  name="txtName" id="txtName" aria-describedby="helpId" placeholder="Name of employee" required>              
            </div>
            <div class="mb-3">
              <label for="txtEmail" class="form-label">Email:</label>
              <input type="email" class="form-control" name="txtEmail" id="txtEmail" aria-describedby="emailHelpId" placeholder="Email of employee" required>
              
            </div>
            <input name="" id="" require class="btn btn-success" type="submit" value="Add">
            <a class="btn btn-primary" href="?controller=employee&action=list">Cancel</a>
        </form>
    </div>
</div>