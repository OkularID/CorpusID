<?php get_header(''); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <section class="headerSection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="boxc pl-lg-64p pr-lg-2p">
                        <h1 class="font-white m-a w-200x"><b>Career</b></h1>
                    </div>
                    <img class="img-fluid d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/header/header-background-01.png"/>
                    <img class="img-fluid d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/header/header-background-01.png"/>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid pt-lg-10p pb-lg-10p pl-lg-5p pr-lg-5p">
            <div class="row">
                <div class="col-lg-12 pb-lg-3p pl-lg-2p">
                    <h2><b>Join</b> Our Team</h2>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="/submit">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Company / University</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Example select</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Software Engineer</option>
                                    <option>DevOps</option>
                                    <option>Project Manager</option>
                                    <option>Backend Engineer</option>
                                    <option>Data Science</option>
                                </select>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form action="/submit">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="11"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Choose file</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    <small id="emailHelp" class="form-text text-muted">Upload your CV, Maximum upload file size 2MB.</small>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>
<?php get_footer(); ?>