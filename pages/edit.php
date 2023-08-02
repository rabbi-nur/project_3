<?php include 'header.php'?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-success text-center"><?php echo isset($message) ? $message : ''; ?></h4>
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label class="col-md-3">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo $singleProduct['name'];?>" required name="name" class="form-control"/>
                                    <input type="hidden" name="id" value="<?php echo $singleProduct['id'];?>"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Price</label>
                                <div class="col-md-9">
                                    <input type="number" value="<?php echo $singleProduct['price'];?>" required name="price" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Stock Amount</label>
                                <div class="col-md-9">
                                    <input type="number" value="<?php echo $singleProduct['stock'];?>" required name="stock" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Description</label>
                                <div class="col-md-9">
                                    <textarea required name="description" class="form-control"><?php echo $singleProduct['description'];?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Image</label>
                                <div class="col-md-9">
                                    <input type="file" accept="image/*" name="image" class="form-control"/>
                                    <img src="<?php echo $singleProduct['description'];?>" alt="" height="70" width="80"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="update_btn" value="Update Product info" class="btn btn-danger px-5"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'?>
