<div class="panel-header" style="height:180px;">
      <div class="header text-center">
          <h2 class="title sr_flash">UPLOAD TESTIMONY</h2>

      </div>
</div>
      <div class="content">

      <!-- <form method="post"> -->
        <div class="row">


           <div class="col-md-5">
            <div class="card">
              <div class="card-header ">
                <h5 class="title">Edit profile</h5>
                <p class="category" style="font-size:13px;">Edit your profile</p>
                <hr />
              </div>
              <div class="card-body ">
                 <form method="POST">

                  <?php 
                    if(isset($_POST['update_testimony'])){

                      $user_id = $_SESSION['user_id'];
                      $reg_id = rand(1111, 99999);

                      $u_fullname = $_SESSION['fullname'];
                      $u_message = trim(nl2br($_POST['message']));
                      $status = 'pending';





                      if($class->upload_testimony($user_id,$reg_id,$u_fullname,$u_message,$status)){
                        echo '<script>window.alert("Update successful")</script>';
                        echo ' <div style="padding:19px; background-color:#abe3a9;color:#071410;" class="sr_flash">
                            Your testimony was sent successful. <b>Thanks for review.</b>
                        </div><br />';
                        // echo $user_id;
                      }
                    }

                  ?>




                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <!-- <label>FULLNAME</label> -->
                        <input type="text" name="a1" class="form-control" value="<?php echo $_SESSION['fullname'];?>" disabled>
                        <br /><br />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <!-- <label>Registered IP address</label> -->
                        <textarea name="message" rows="4" cols="80" class="form-control" placeholder="Here can be your message" value="Mike" required></textarea></div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <br />
                <button type="submit" name="update_testimony" class="btn btn-danger"><i class="now-ui-icons emoticons_satisfied" ></i> &nbsp;&nbsp;Upload testimony</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>









          <div class="col-md-7">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <?php $class->dashbord_allTestimony()?>
                  <!-- <blockquote>
                    <p class="blockquote blockquote-primary">
                      "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                      <br>
                      <br>
                      <small>
                        - Noaa | <?php echo ($_SESSION['reg_downlineCode']);?>
                      </small>

                    </p>
                  </blockquote> -->
              </div>
             
            </div>
          </div>

















          


          


        <!-- </form> -->

        </div>
      </div>






























      <!-- </div> -->
