        <div class="page-header">
          <div class="container-fluid">
            <!-- <h2 class="h5 no-margin-bottom"><i class="fa fa-check text-warning"></i><i class="fa fa-check text-warning"></i>&nbsp;&nbsp;  DEPOSIT SAVE</h2> -->
          </div>
        </div>




        <section class="no-padding-top">
          <div class="container-fluid">
          <!-- <form class="form-horizontal" method="post"> -->


              <?php
echo'<script>swal("SUCCESSFUL!","Request for Withdrawal sent sccessful","success")</script>';
                
                ?>
            <div class="row">

              <div class="col-lg-3">
              </div>

              <div class="col-lg-6">
              <br /><br />
                <div class="block" style="background-color:#fcfcfc;color:#000;text-align:center;">
                    <div class="block-body">
                      <br />
                      <center>
                        <img class=" border-gray" src="../images/successful.png" alt="stucture-invest-barcode" width="50%">
                        <br /><br />
                        <h2 style="color: #f0b500;">Request for Withdrawal sent<hr /></h2>
                      </center>
                     <p style="font-size:13px;">your withdrawal will reflect shortly!</p>
                     <a href="?Dashboard" class="btn btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Return to dashboard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 
                    </div>
                </div>
              </div>



         


              </div>






          <!-- </form> -->
          </div>
        </section>







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

  swal("Copied!","","info");

} 
</script>
