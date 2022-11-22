        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom"><i class="fa fa-gg text-warning"></i>&nbsp;&nbsp; MY INVESTMENT HISTORY</h2>
          </div>
        </div>




        <section class="no-padding-top">
          <div class="container-fluid">
          <!-- <form class="form-horizontal" method="post"> -->



            <div class="row">



              



            <div class="col-lg-12">
                <div class="block" style="background-color:#d6a318;color:#000;">
                  <div class="title"><strong style="color:#fff;">Current Invest</strong></div>
                  <div class="block-body">
                      <div class="row">
                          <div class="table-responsive"> 
                                    <table class="table" style="font-size:14px;">
                                      <thead>
                                        <tr>
                                          <th>PAYMENT ID</th>
                                          <th>INVESTED PLAN</th>
                                          <th>AMOUNT</th>
                                          <th>CRYPTO CURRENCY</th>
                                          <th>STATUS</th>
                                          <th>DATE INVESTED</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php 
                    $investment_id = $_SESSION['user_id'];
                    // echo $investment_id;

                    $class->master_current_invest($investment_id);

                    ?>
                                        <!-- <tr>
                                          <th scope="row">1</th>
                                          <td>Mark</td>
                                          <td>Otto</td>
                                          <td>@mdo</td>
                                          <td>Otto</td>
                                          <td>@mdo</td>
                                        </tr> -->
                                      </tbody>
                                    </table>
                              </div>
                      </div>
                  </div>
                </div>
              </div>








            <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong style="color:#fff;">Deposit History</strong></div>
                  <div class="block-body">
                      <div class="row">
                          <div class="table-responsive"> 
                                    <table class="table" style="font-size:14px;">
                                      <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>PAYMENT ID</th>
                                          <th>INVESTED PLAN</th>
                                          <th>AMOUNT</th>
                                          <th>CRYPTO CURRENCY</th>
                                          <th>STATUS</th>
                                          <th>DATE INVESTED</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                    <?php 
                    $investment_id = $_SESSION['user_id'];
                    // echo $investment_id;

                    $class->MFXhisory_invest($investment_id);

                    ?>
                                        <!-- <tr>
                                          <th scope="row">1</th>
                                          <td>Mark</td>
                                          <td>Otto</td>
                                          <td>@mdo</td>
                                          <td>Otto</td>
                                          <td>@mdo</td>
                                        </tr> -->
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
