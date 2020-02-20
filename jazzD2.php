<?php

declare(strict_types=1);
session_start();
include "AutoLoaderIncl.php";

$jazzTicket= new ticketsService();

?>  
<html class="jazzD1">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/jazzstylesheet.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/jazzScript.js" ></script>  
    <title>
            Jazz D2 27 July 2020 || Haarlem Festival
    </title> 
</head>
<body>
<?php include "header.php";?> 

  <div class="rowTicketpg">
    <div class="columnTicketpg a" style="  margin-top:1vw; text-align: center; width: 30%;">
          <h1 class="inner" >
          <b> Day 2 <br>
                  July 27,2020
                  <br><br>
                  Friday<br>
                  The Patronaat</b>
                  <br><br>
                  <a href="#venueInfo2" class="linkVenueInfo">(venue info)</a>
          </h1>
    </div>


    <div class= "columnTicketpg b" style="margin-top:1vw; width: 60%;">
<!-- -------------------------------------------------------ROW 1---------------------------------------------------------------------------->
      <div class="rowTickets">
          <div class="columnTickets"  >
            <div class="row1">
              <div class="column1" >
              <b> 
                    <?php $jTicketArr7=$jazzTicket->getJazzTicketInfo(7) ;  ?>
                    <?php echo $jTicketArr7[3]; ?>
                    <br>
                    <?php echo $jTicketArr7[1]; ?>
                    <br>
                    <?php echo $jTicketArr7[6]; ?>
                    <br>
                    €<?php echo $jTicketArr7[4]; ?>
                <div class="cart-quantity">
                          Qty: 
                          
                          <button class="qtyBtn" onclick="increase_by_one('qty7');">+</button>
                            <input id="qty7" type="text" value="1" name="J7" />
                          
                          <button class="qtyBtn" onclick="decrease_by_one('qty7');" />-</button>
                        </div>
                </b>
              </div>
              <div class="column1" style=" float: right; text-align: left; width: auto;" >
              <p style="color:green;  "> 
                <b> Available </b></p>
                    <br>
                    <button class="addTOcart" onclick="#" > Add to cart </button> 
              </div>
            </div>
          </div>

          <div class="columnTickets"  >
          <div class="row1">
              <div class="column1" >
              <b> 
                    <?php $jTicketArr10=$jazzTicket->getJazzTicketInfo(10) ;  ?>
                    <?php echo $jTicketArr10[3]; ?>
                    <br>
                    <?php echo $jTicketArr10[1]; ?>
                    <br>
                    <?php echo $jTicketArr10[6]; ?>
                    <br>
                    €<?php echo $jTicketArr10[4]; ?>
                <div class="cart-quantity">
                          Qty: 
                          
                          <button class="qtyBtn" onclick="increase_by_one('qty8');">+</button>
                            <input id="qty8" type="text" value="1" name="J8" />
                          
                          <button class="qtyBtn" onclick="decrease_by_one('qty8');" />-</button>
                        </div>
                </b>
              </div>
              <div class="column1" style=" float: right; text-align: left; width: auto;" >
              <p style="color:green;  "> 
                <b> Available </b></p>
                    <br>
                    <button class="addTOcart" onclick="#" > Add to cart </button> 
              </div>
            </div>
          </div>

          
      </div>
<!-- -------------------------------------------------------ROW 1----------------------------------------------------------------------------> 
   
<!-- -------------------------------------------------------ROW 2---------------------------------------------------------------------------->
      <div class="rowTickets">
          <div class="columnTickets"  >
            <div class="row1">
              <div class="column1" >
              <b> 
                    <?php $jTicketArr8=$jazzTicket->getJazzTicketInfo(8) ;  ?>
                    <?php echo $jTicketArr8[3]; ?>
                    <br>
                    <?php echo $jTicketArr8[1]; ?>
                    <br>
                    <?php echo $jTicketArr8[6]; ?>
                    <br>
                    €<?php echo $jTicketArr8[4]; ?>
                <div class="cart-quantity">
                          Qty: 
                          
                          <button class="qtyBtn" onclick="increase_by_one('qty9');">+</button>
                            <input id="qty9" type="text" value="1" name="J9" />
                          
                          <button class="qtyBtn" onclick="decrease_by_one('qty9');" />-</button>
                        </div>
                </b>
              </div>
              <div class="column1" style=" float: right; text-align: left; width: auto;" >
              <p style="color:green;  "> 
                <b> Available </b></p>
                    <br>
                    <button class="addTOcart" onclick="#" > Add to cart </button> 
              </div>
            </div>
          </div>

          <div class="columnTickets"  >
          <div class="row1">
              <div class="column1" >
              <b> 
                    <?php $jTicketArr11=$jazzTicket->getJazzTicketInfo(11) ;  ?>
                    <?php echo $jTicketArr11[3]; ?>
                    <br>
                    <?php echo $jTicketArr11[1]; ?>
                    <br>
                    <?php echo $jTicketArr11[6]; ?>
                    <br>
                    €<?php echo $jTicketArr11[4]; ?>
                <div class="cart-quantity">
                         Qty: 
                          
                          <button class="qtyBtn" onclick="increase_by_one('qty10');">+</button>
                            <input id="qty10" type="text" value="1" name="J10" />
                          
                          <button class="qtyBtn" onclick="decrease_by_one('qty10');" />-</button>
                        </div>
                </b>
              </div>
              <div class="column1" style=" float: right; text-align: left; width: auto;" >
              <p style="color:green;  "> 
                <b> Available </b></p>
                    <br>
                    <button class="addTOcart" onclick="#" > Add to cart </button> 
              </div>
            </div>
          </div>

          
      </div>
<!-- -------------------------------------------------------ROW 2----------------------------------------------------------------------------> 
   
<!-- -------------------------------------------------------ROW 3---------------------------------------------------------------------------->
      <div class="rowTickets">
          <div class="columnTickets"  >
            <div class="row1">
              <div class="column1" >
              <b> 
                    <?php $jTicketArr9=$jazzTicket->getJazzTicketInfo(9) ;  ?>
                    <?php echo $jTicketArr9[3]; ?>
                    <br>
                    <?php echo $jTicketArr9[1]; ?>
                    <br>
                    <?php echo $jTicketArr9[6]; ?>
                    <br>
                    €<?php echo $jTicketArr9[4]; ?>
                <div class="cart-quantity">
                          Qty: 
                          
                          <button class="qtyBtn" onclick="increase_by_one('qty11');">+</button>
                            <input id="qty11" type="text" value="1" name="J11" />
                          
                          <button class="qtyBtn" onclick="decrease_by_one('qty11');" />-</button>
                        </div>
                </b>
              </div>
              <div class="column1" style=" float: right; text-align: left; width: auto;" >
              <p style="color:green;  "> 
                <b> Available </b></p>
                    <br>
                    <button class="addTOcart" onclick="#" > Add to cart </button> 
              </div>
            </div>
          </div>

          <div class="columnTickets"  >
          <div class="row1">
              <div class="column1" >
              <b> 
                    <?php $jTicketArr12=$jazzTicket->getJazzTicketInfo(12) ;  ?>
                    <?php echo $jTicketArr12[3]; ?>
                    <br>
                    <?php echo $jTicketArr12[1]; ?>
                    <br>
                    <?php echo $jTicketArr12[6]; ?>
                    <br>
                    €<?php echo $jTicketArr12[4]; ?>
                <div class="cart-quantity">
                          Qty: 
                          
                          <button class="qtyBtn" onclick="increase_by_one('qty12');">+</button>
                            <input id="qty12" type="text" value="1" name="J12" />
                          
                          <button class="qtyBtn" onclick="decrease_by_one('qty12');" />-</button>
                        </div>
                </b>
              </div>
              <div class="column1" style=" float: right; text-align: left; width: auto;" >
              <p style="color:green;  "> 
                <b> Available </b></p>
                    <br>
                    <button class="addTOcart" onclick="#" > Add to cart </button> 
              </div>
            </div>
          </div>

         
      </div>
<!-- -------------------------------------------------------ROW 3----------------------------------------------------------------------------> 
  <a class="allAccess" href="jazzAllAccess.php?day=27">
    <p >
    Get your All-Access pass for this day @ €35,00 <br>
    All- Access pass for Thursday, Friday, Saturday @ €80,00 </p>
    <a>
  </div> 

 </div>

<div id=venueInfo2 class=venueInfo>
  <h1><i><b> General Information about the venue </b> </i>
    <p>
      <br>
      Patronaat<br>
      Address:<br>
      Zijlsingel 2<br>
      2013 DN Haarlem<br>
      E-mail: info@patronaat.nl<br>
      phone: <br>
      023-517 58 50 (office) -  during office hours 10.00u - 17.00u<br>
      023-517 58 58 (cash desk/information number)</p>
</div> 

 <?php include "footer.php";?> 
</body>
</html>

