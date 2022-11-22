




<div class="panel-header" style="height:180px;">
      <div class="header text-center">
          <h2 class="title sr_flash">REFERRAL LINK</h2>
      </div>
</div>
      <div class="content">

      <!-- <form method="post"> -->
        <div class="row">


           <div class="col-md-12">
            <div class="card">
              <div class="card-header ">
                <h5 class="title">Referral-Link</h5>
                <p class="category">earning 2% with your referral link</p>
                <hr />
              </div>
              <div class="card-body ">
                <!-- <div id="map" class="map"></div> -->
                <input type="text" class="form-control" value="www.hgg.<?php echo $_SESSION['reg_downlineCode']; ?>" style="padding:20px;border:1px dashed red;">

              </div>
            </div>
          </div>



           <div class="col-md-12">
            <div class="card">
              <div class="card-header ">
                <h5 class="title">My downline</h5>
                <p class="category">Currect <span class="text-success">active</span> member and <span class="text-warning">inactive member</span></p>
              </div>
              <div class="card-body">
                <!-- <div id="map" class="map"></div> -->
                <input type="text" class="form-control"  value="www.hgg.<?php echo $_SESSION['reg_downlineCode']; ?>" id="myInput" style="padding:20px;border:1px dashed red;">
                <!-- <br /> --><br />
                 <button onclick="myFunction()" class="btn btn-sm btn-primary" style="padding:10px;">Copy Referral Link</button> 
                  <!-- </p> -->
              </div>
            </div>
          </div>

        <!-- </form> -->

        </div>
      </div>


<script type="text/javascript">
  function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  // alert("Copied the text: " + copyText.value);

  swal("Copied!","www.hgg.<?php echo $_SESSION['reg_downlineCode']; ?>","info");

} 
</script>




























      <!-- </div> -->
