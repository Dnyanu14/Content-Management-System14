<?php include "includes/admin_header.php" ?>
    <div id="wrapper">

      
      <?php include "includes/admin_navigation.php" ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Categories
                            <small><?php echo $_SESSION['username']?></small>
                        </h1>
                        <div class="col-xs-6">
                           <?php
                     insert_categories();
                            ?>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat-title">Add Category</label>
                                    <input type="text" class="form-control" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                                </div>
                            </form>
                            <?php  include "includes/update_categories.php"  ?> 
                        </div>
                        <div class="col-xs-6">
                           
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>ACTION</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                            findAllCategories();
                                    ?>
                                </tbody>
                            </table>
                            <?php
                            deleteCategories();
                            ?>
                        </div>
                     </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
       <?php include "includes/admin_footer.php" ?>