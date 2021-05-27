<div class="container">

    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="<?php base_url(); ?>/admin/category">Category List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php base_url(); ?>/admin/category_add">Add Category</a>
                </li>
                <!-- <?php echo base_url()."admin/category_insert"; ?> -->
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li> -->
            </ul>
        </div>
        <div class="card-body">
            
            <form action="<?php base_url(); ?>/admin/category_insert" method="post" class="text-muted">
                <div class="form-group">
                    <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter Category Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="category_type" name="category_type" placeholder="Enter Category Type" required>
                </div>
                <div class="form-group">
                    <textarea name="description" id="description" cols="30" rows="4" class="form-control"
                        placeholder="Enter description" required></textarea>
                    <!-- <input type="text" class="form-control" id="category_title" placeholder="Enter Category Title"> -->
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="tags" name="tags" placeholder="Enter tags separated by comma" required>
                </div>

                <div class="form-group">
                    <select class="custom-select custom-select-lg mb-3" name="isActive">
                        <option selected >Select Active or Not</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                    </select>
                </div>



                <button type="submit" class="btn btn-primary btn-hover btn-lg" style=" border-radius: 40px;">Add Category</button>
            </form>
        </div>
    </div>
</div>