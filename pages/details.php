
<?php include 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-body">
                <img src="asset/img/<?php echo $singleProjects['image']; ?>" alt="" class="card-img-top"/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body">
                <h1><?php echo $singleProjects['projectName']; ?></h1>
                <p><?php echo $singleProjects['description']; ?></p>
<!--                <p>PRICE : --><?php //echo $singleProduct['price']; ?><!-- $</p>-->

            </div>
        </div>
    </div>
</div>
<?php //include 'footer.php'; ?>
