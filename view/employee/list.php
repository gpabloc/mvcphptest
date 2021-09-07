<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controller=employee&action=add" role="button">New Employee</a>
    </div>
    <div class="card-body">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php         
        foreach($employees as $employee){
        ?>
        <tr>
            <td scope="row"><?php echo $employee->id?></td>
            <td><?php echo $employee->name;?></td>
            <td><?php echo $employee->email;?></td>
            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="?controller=employee&action=update&id=<?php echo $employee->id;?>" class="btn btn-info">Update</a>
                    <a href="?controller=employee&action=delete&id=<?php echo $employee->id;?>" class="btn btn-danger">Erase</a>
                    
                </div>

            </td>
        </tr>  
        <?php 
        }
        ?>      
    </tbody>
</table>
    </div>
    
</div>


