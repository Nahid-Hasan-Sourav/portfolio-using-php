<?php include 'header.php' ?>
<section>
    <h1 class="text-uppercase text-center my-5">All Projects </h1>
    <div class="container">
        <div class="row">
            <?php foreach( $allProjects as $item) { ?>
                <div class="col-md-4 g-5">
                    <div class="card">
                        <!-- workong <img src="--><?php //echo $blog['image']; ?><!--" alt="" class="card-img-top"/>-->

                        <img src="asset/img/<?php echo $item['image']; ?>" alt="" class="card-img-top img-fluid"
                             style="width:100%;height: 200px;"
                        />
                        <div class="card-body">

                            <h5>Project- <?php echo $item['id']; ?> </h5>
                            <!--                           <p>--><?php //echo $item['description']; ?><!--</p>-->
                            <p></p>
                            <div class="d-flex justify-content-between">
                                <a href="action.php?page=single-project-details&&id=<?php echo $item['id']; ?>" class="btn btn-primary">Detail</a>
                                <button class="btn btn-md btn-primary text-white">Live Site</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
</section>