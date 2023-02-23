
<?php include 'header.php'; ?>

<section class="">
    <div class="container">
       <div class="row">
           <div class="col-md-7">
              <div class=" d-flex flex-column justify-content-center h-100">

                     <div class="">
                         <p class="" style="letter-spacing: 9px;">WELLCOME TO MY GLOBE</p>
                         <h2>Hi</h2>
                         <h4>I am <span style="color: red">Nahid Hasan Sourav</span></h4>
                         <h4>I am a Full Stack Developer</h4>
                         <p>
                             To secure a challenging position in a reputable organization to expand my learnings, knowledge, and skills. I wish to make use of my interpersonal skills to achieve goals of a company that focuses on customer satisfaction and customer experience.
                         </p>
                         <button class="btn btn-md btn-success">Download Resume</button>
                     </div>

              </div>
           </div>
           <div class="col-md-5 text-end">
                <img src="asset/img/bannerPhoto-res-1.png"
                class="h-75"
                />
           </div>
       </div>
    </div>
</section>


<section>
    <h1 class="text-center">ABOUT ME</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-5 text-end">
                <img src="asset/img/bannerPhoto-res-1.png"
                     class="h-75"
                />
            </div>
            <div class="col-md-7">

                <div class="">
                    <h2 class="mt-5">I am NH SOURAV</h2>
                    <p class="mb-4">Recently I have completed my B.SC in Computer Science and Engineering from Daffodil International University</p>

                    <p>To secure a challenging position in a reputable organization to expand my learnings, knowledge, and skills. I have great problem-solving power with excellent communication skills. I wish to make use of my interpersonal
                        skills to achieve goals of a company that focuses on customer satisfaction and customer experience.</p>

                    <p><span class="fw-bold">Date of birth : </span>07-04-1998</p>
                    <p><span class="fw-bold">Nationality :  </span>Bangladesh</p>
                    <p><span class="fw-bold">Address : </span> Sukhrabad,Dhaka,Bangladesh</p>

                    <button class="btn btn-md btn-success mt-3">Download Resume</button>
                </div>
            </div>
        </div>
    </div>
</section>





<section>
    <h1 class="text-uppercase text-center my-5">Projects </h1>
    <div class="container">
       <div class="row">
           <?php foreach(array_slice( $allProjects, 0, 3)as $item) { ?>
               <div class="col-md-4">
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

           <a href="action.php?page=see-all-projects" class="btn btn-primary d-block w-25 mx-auto my-5">SEE ALL</a>
       </div>
    </div>
</section>

<section>
    <div class="container">
        <h1 class="text-uppercase my-5 text-center">contact me</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="asset/img/contact.png"  class="text-end img-fluid"/>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="">

                            <div class="row my-4">
<!--                                <label class="col-md-3">First Number : </label>-->
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="first_number"
                                    placeholder="first name"
                                    >
                                </div>
                            </div>

                            <div class="row my-1">

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="first_number"
                                           placeholder="last name"
                                    >
                                </div>
                            </div>

                            <div class="row my-4">

                                <div class="col-md-12">
                                    <input type="email" class="form-control" name="first_number"
                                           placeholder="email"
                                    >
                                </div>
                            </div>

                            <div class="row my-4">

                                <div class="col-md-12">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                </div>
                            </div>
                            <div class="row my-4">

                                <div class="col-md-5">
                                  <button class="btn btn-primary btn-md">SEND MESSAGE</button>
                                </div>
                            </div>




                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
