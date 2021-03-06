<?php
require 'backendheader.php';
?>

<div class="app-title">
    <div>
        <h1> <i class="icofont-list"></i>Item</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
        <a href="<?php echo $GLOBALS['view_path']?>item_new" class="btn btn-outline-primary">
            <i class="icofont-plus"></i>
        </a>
    </ul>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        foreach ($items as $item){
                            $id = $item['id'];
                            $name = $item['name'];
                            $bid = $item['bid'];
                            $bname = $item['bname'];
                            $photo =$GLOBALS['view_path'].$item['photo'];
                            $discreption = $item['discription'];
                            $discount = $item['discription'];
                            $discount = $item['discount'];
                            $price = $item['price'];
                            ?>
                            <tr>
                                <td><?php echo $i++;?></td>
                                <td class="row m-0 ">
                                    <div class="col-md-5 col-lg-3 p-0">

                                        <img style="width:150px;height: 100px" width="" src="<?php echo $photo;?>" ">
                                    </div>
                                    <div class=" col-md-7 col-lg-9">
                                        <?php echo $name;?><br>
                                        <?php echo $discreption;?>
                                    </div>
                                </td>
                                <td>
                                    <?php echo $bname;?>
                                </td>
                                <td>
                                    <?php echo $discount;?> Ks<br>
                                    <del><?php echo $price;?> Ks</del>

                                </td>

                                <td>
                                    <a href="<?php echo $GLOBALS['view_path']?>item_edit?id=<?php echo $id;?>" class="btn btn-warning">
                                        <i class="icofont-ui-settings"></i>
                                    </a>

                                    <form class="d-inline-block" action="<?php echo $GLOBALS['view_path']?>item_delete"
                                          method="post" onsubmit="return confirm('Are You Sure to Delete?')">
                                        <button class="btn btn-outline-danger">
                                            <input type="hidden" name="id" value="<?php echo $id?>">
                                            <i class="icofont-close"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require 'backenfooter.php';
?>

