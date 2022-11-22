        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom"><i class="icon-bars text-warning"></i>&nbsp;&nbsp; WITHDRAW FUNDS</h2>
          </div>
        </div> 




        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">



              









            
           <div class="col-lg-12">
            <form method="post">
              
                <div class="block">
                  <div class="title"><strong>Request For Withdrawal</strong></div>
                  <div class="block-body">
                      <div class="row">

                        <div class="col-sm-12">
                          <div class="form-group-material">
                          <div class="table-responsive">
                   <table class="table align-items-center" style="font-size:13px;">
                <thead>
                  <tr>
                    <th scope="col">N/s</th>
                    <th scope="col">payment ID</th>
                    <th scope="col">Crypto Coin</th>
                    <th scope="col">Plan</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Earning</th>
                    <th scope="col">Date</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody style="font-size:12px;">
                  <?php
                  $user_id = $_SESSION['user_id'];
                  $class->MXFreadywithdrawl($user_id);
                  ?>
                </tbody>
              </table>
                          </div>
                        </div>

                      </div>
                  </div>
                </div>
              </form>
              </div>
              


            



             
              </div>
          </div>
        </section>






