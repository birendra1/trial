<div class="container">

    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                    <a class="nav-link " href="<?php base_url(); ?>/admin/category">Category List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php base_url(); ?>/admin/category_add">Add Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php base_url(); ?>/admin/product_add">Add Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php base_url(); ?>/admin/category_add">View all Product</a>
                </li>
            </ul>
        </div>
        <div class="card-body text-black-50">
        <form action="<?php base_url(); ?>/admin/product_insert" method="post" class="text-muted">
                <div class="form-group">
                    <input type="text" class="form-control" id="p_title" name="p_title" placeholder="Product title" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="p_name" name="p_name" placeholder="Enter product name" required>
                </div>
                <div class="form-group">
                    <textarea  id="p_description" name="p_description" placeholder="Enter description" cols="30" rows="4" class="form-control"
                         required></textarea>
                    <!-- <input type="text" class="form-control" id="category_title" placeholder="Enter Category Title"> -->
                </div>
              <div class="form-group">
                    <select class="custom-select custom-select-md mb-3" name="p_category_type" id="p_category_type">
                        <option selected >Select Category</option>
                        <?php foreach($result as $data) { ?>
                        <option value="<?php echo $data->category_type ?>"><?php echo $data->category_type ?></option>
                        <?php } ?>
                      
                    </select>
                </div>

                <div class="form-group">
                    
                    <input type="file" class="form-control-file" id="p_image">
                </div>

                <div class="form-group">
                    <select class="custom-select custom-select-md mb-3" name="p_isActive" id="p_isActive">
                        <option selected >Select Active or Not</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-hover btn-lg" style=" border-radius: 40px;">Add Product</button>
            </form>
        </div>
    </div>
</div>