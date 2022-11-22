        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom"><i class="fa fa-check text-warning"></i><i class="fa fa-check text-warning"></i>&nbsp;&nbsp; MY WITHDRAW HISTORY</h2>
          </div>
        </div>




        <section class="no-padding-top">
          <div class="container-fluid">
          <!-- <form class="form-horizontal" method="post"> -->

            <div class="row">
<div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong style="color:#fff;">Withdraw History</strong></div>
                  <div class="block-body">
                      <div class="row">
                          <div class="table-responsive"> 
                      <table class="table" style="font-size:14px;">
                          <thead>
                            <th>WITHDRAWAL ID</th>
                            <!-- <th>INVESTED PLAN</th> -->
                            <th>AMOUNT</th>
                            <th>CRYPTO CURRENCY</th>
                            <th>STATUS</th>
                            <th>DATE INVESTED</th>
                          </thead>
                          <tbody style="font-size:14px;">
                           <?php 
                          $investment_id = $_SESSION['user_id'];
                          // echo $investment_id;

                          $class->MFXwithdraw1($investment_id);

                          ?>
                          </tbody>
                      </table>
                              </div>
                      </div>
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
