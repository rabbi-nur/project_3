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
                                    <input type="text" required name="name" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Price</label>
                                <div class="col-md-9">
                                    <input type="number" required name="price" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Stock Amount</label>
                                <div class="col-md-9">
                                    <input type="number" required name="stock" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Description</label>
                                <div class="col-md-9">
                                    <textarea required name="description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Product Image</label>
                                <div class="col-md-9">
                                    <input type="file" required accept="image/*" name="image" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="submit_btn" value="Create New Product" class="btn btn-danger px-5"/>
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
