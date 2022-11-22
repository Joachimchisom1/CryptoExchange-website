        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom"><i class="fa fa-gg text-warning"></i>&nbsp;&nbsp; COMFIRM DEPOSITINVESTMENT</h2>
          </div>
        </div>




        <section class="no-padding-top">
          <div class="container-fluid">
          <!-- <form class="form-horizontal" method="post"> -->



            <div class="row">

              <div class="col-lg-12">
                <div class="block" style="background-color:#d6a318;color:#000;text-align:center;">
                    <div class="block-body">
                     Please send $<?php echo number_format($_GET['id']);?> worth of <?php echo ($_GET['payment']);?> to <i><?php $class->preview_bitcoin();?></i>
                    </div>
                </div>
              </div>



              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>DEPOSIT</strong></div>
                  <div class="block-body">
                     Hello Dear, <br /><br />
                     Ensure You Make Payment To The company's Official Bitcoin Wallet Address. <br />Copy The Address Below and make payment to the Address
                     <br /><br />
                     <b><?php $class->preview_bitcoin();?></b>
                      <br /><br />

                     <b>NOTE</b> After Successful Payment, Send Transaction Details To acornstrade.england@gmail.com
                     <br /><br />

                     BUY COIN FROM ONLY TRUSTED COMPANIES, BELOW ARE RELIABLE LINKS TO BUY FROM
                     <br /><br />
                     <ul>
                              <li>Changelly <a href="https://changelly.com/processing">CLICK HERE TO BUY</a>  </li>
                              <li>Moonpay <a href="https://buy.moonpay.io/">CLICK HERE TO BUY</a>  </li>
                              <li>Cex <a href="https://cex.io/">CLICK HERE TO BUY</a>  </li>
                              <li>localbitcoins <a href="https://localbitcoins.com">CLICK HERE TO BUY</a>  </li>
                      </ul>
                    </div>
                  </div>
                </div>




            <div class="col-lg-8">
                <div class="block">
                  <div class="title"><strong>Deposit Details<hr /></strong></div>
                  <div class="block-body">
                      <div class="row">

                        <?php
                        $investment_id = $_GET['check-out'];
                        $class->MASTERTRADERFXinvestment_preview($investment_id);
                                // echo $investment_id;
                      ?>
                        <!-- <div class="col-sm-12"> -->
           <!--  <section>
                <div class="table-responsive">
                  <table class="table">
                    <tbody class="text-primary" style="background-color:#22252a;">
                      <td width="400" style="font-size:17px;color:#fff;padding:10px;">PLAN</td>
                      <td width="300" class="text-left" style="font-size:17px;color:#fff;padding:10px;">$90,000</td>
                    </tbody>

                    <tbody class="text-primary">
                      <td width="400" style="font-size:17px;color:#fff;padding:10px;">PROFIT</td>
                      <td width="300" class="text-left" style="font-size:17px;color:#fff;padding:10px;">3% After 5 Days</td>
                    </tbody>


                    <tbody class="text-primary" style="background-color:#22252a;">
                      <td width="400" style="font-size:17px;color:#fff;padding:10px;">Principle return</td>
                      <td width="300" class="text-left" style="font-size:17px;color:#fff;padding:10px;">yes</td>
                    </tbody>


                    <tbody class="text-primary">
                      <td width="400" style="font-size:17px;color:#fff;padding:10px;">Principle withdraw</td>
                      <td width="300" class="text-left" style="font-size:17px;color:#fff;padding:10px;">Not available</td>
                    </tbody>


                    <tbody style="background-color:#22252a;">
                      <td width="400" style="font-size:17px;color:#fff;padding:10px;">Amount</td>
                      <td width="300" class="text-left" style="font-size:17px;color:#fff;padding:10px;">$1,500.00</td>
                    </tbody>



                  </table>

  <br />
  <a href="?Deposit" class="btn btn-sm btn-warning" style="padding:10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Save&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="?Dashboard" class="btn btn-danger" style="padding:10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cancel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 

                </div>
          </section> -->




                        <!-- </div> -->
                      </div>
                  </div>
                </div>
              </div>



              <div class="col-lg-4">
                <div class="block">
                  <div class="title text-center"><strong>Copy Wallet Address</strong></div>
                  <div class="block-body">
                      <!-- <div class="row"> -->
                        <!-- <hr /></h4> -->
                   <center><img class=" border-gray" src="../images/structure-invest-barcode-image.jpg" alt="stucture-invest-barcode" width="80%"></center>
                    <br />
                    <input type="text" class="form-control"  value="<?php $class->preview_bitcoin();?>" id="myInput">
                    <br />
                     <button onclick="myFunction()" class="btn btn-sm btn-warning form-control" style="padding:10px;">Copy wallet address</button> 
                  <!-- </p> -->
                        <!-- </div> -->
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
