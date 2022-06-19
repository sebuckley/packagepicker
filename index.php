<?php

include 'include/header.php';

include 'dbh.php';
?>


<div class="btn-group-lg charity-btn" role="group">
<h3>Are you a Charity?</h3>
  <button type="button" id="yes-charity" class="btn btn-default yes-charity yes-btn">Yes</button>
  <button type="button" id="no-charity" class="btn btn-default no-charity no-btn">No</button>
</div>

<div class="btn-group-lg charity-btn" role="group">
<h3>Are you VAT Registered?</h3>
  <button type="button" id="yes-vat" class="btn btn-default yes-vat yes-btn">Yes</button>
  <button type="button" id="no-vat" class="btn btn-default no-vat no-btn">No</button>
</div>

<?php

$sqlcost = "SELECT * FROM membership";
$resultcost= mysqli_query($conn, $sqlcost);
$rowcost = mysqli_fetch_array($resultcost);



$Charity = $rowcost['Charity'];
$Key = $rowcost['Kee'];
$Core = $rowcost['Core'];
$Prime = $rowcost['Prime'];




$sql = "SELECT * FROM support";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)){
	
	$SupportID = $row['SupportID'];
	$Support = $row['Support'];

echo "<div id='row'>";
	echo "<div id='col-sm-12'>";

		echo "<div class='panel panel-default chamber'>";
			echo "<div class='panel-heading'>";
				echo "<div class='pannel-text'>";
			
							 
				echo "<div class='textelement'>";
				echo $Support;
				echo "</div>";
				// echo "<div class='charity-header'>Charity</div><div class='charity-header-value $SupportID'>0</div><div class='key-header'>Key</div><div class='key-header-value $SupportID'>0</div><div class='core-header'>Core</div><div class='core-header-value $SupportID'>0</div><div class='prime-header'>Prime</div> <div class='prime-header-value $SupportID'>0</div>"; 
					  
				echo "</div>";
			echo "</div>";
		
			echo "<div class='panel-body'>";
 
				echo "<table id='tablestyle'>";
					echo "<tr >";
						echo "<th align='center' class='description'>";
		 
						

						echo "</th>";
						echo "<th align='center' class='equal need-th'>";
		
						echo "Need";

						echo "</th>";
						echo "<th align='center' class='equal charityhide charity-th'>";
		
						echo "Charity <span class='membershipcost charity'>&pound;<span class='charitycost' >$Charity</span> PCM <span class='vathide'>+VAT<span></span>";

						echo "</th>";
						echo "<th align='center' class='equal keyhide key-th'>";
		
						echo "Key <span class='membershipcost key'>&pound;<span class='keycost' >$Key</span> PCM <span class='vathide'>+VAT<span></span>";

						echo "</th>";
						echo "<th align='center' class='equal core-th'>";
		
						echo "Core <span class='membershipcost core'>&pound;<span class='corecost' >$Core</span> PCM <span class='vathide'>+VAT<span></span>";

						echo "</th>";
						echo "<th align='center' class='equal prime-th'>";
		
						echo "Prime <span class='membershipcost prime'>&pound;<span class='primecost' >$Prime</span> PCM <span class='vathide'>+VAT<span></span>";

						echo "</th>";
						
						echo "<th align='center' class='equal'>";
						echo "</th>";
						
						echo "<th align='center' class='equal'>";
						echo "</th>";
					
						


					echo "</tr>";
				

					
					$sql = "SELECT * FROM supportdetail WHERE SupportTypeID='$SupportID'";
					$resultsupportdetails = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($resultsupportdetails);
					
					if ($resultCheck == 0){
						
					echo "No Results";	
					
					}else{
						
					
					while($rowdetails = mysqli_fetch_array($resultsupportdetails )){
						
						
					$supportname = $rowdetails['SupportName'];
					$charity = $rowdetails['Charity'];
					$key = $rowdetails['Kee'];
					$core = $rowdetails['Core'];
					$prime = $rowdetails['Prime'];
					$description = $rowdetails['Description'];
					$display = $rowdetails['Display'];
				
					echo "<tr class='tablerow $SupportID'> ";
						echo "<td id='description' class='description supportname'>";
		
						echo $supportname; 
						
						echo "<span><span class='info'>?</span></span>";

						echo "</td>";
						echo "<td align='center' class='equal need'>";
						
						if($supportname == 'Free event tickets per year'){
							
						}else{
		
						echo "<span class='glyphicon glyphicon-minus selector group$SupportID $SupportID'></span>";
						
						}

						echo "</td>";
						echo "<td align='center' class='equal charityhide tdtext'>";
						
						if($charity >= 1){
							
						if($display == 1){
							
						if($supportname == 'B2B Prospector'){
						
						if($charity == 1){
							
						echo "<span class='glyphicon glyphicon-ok charity $SupportID'></span>";	
							
						}else{
							
						echo "<span class='number charity $SupportID'>$charity% OFF</span>";	
	
							
						}
						
						
						}else{
							
						echo "<span class='number charity $SupportID'>$charity</span>";	
						
						}
						
						}else{
							
							
						echo "<span class='glyphicon glyphicon-ok charity $SupportID'></span>";	
						
							
						}
						
						}
						
						
				


						echo "</td>";
						echo "<td align='center' class='equal keyhide tdtext'>";
						
						if($key >= 1){
							
						if($display == 1){
							
						if($supportname == 'B2B Prospector'){
						
						if($key == 1){
							
						echo "<span class='glyphicon glyphicon-ok key $SupportID'></span>";	
							
						}else{
							
						echo "<span class='number key $SupportID'>$key% OFF</span>";	
	
							
						}
						
						
						}else{
							
						echo "<span class='number key $SupportID'>$key</span>";	
						
						}
						
						}else{
							
							
						echo "<span class='glyphicon glyphicon-ok key $SupportID'></span>";	
						
							
						}
						
						}

						echo "</td>";
						echo "<td align='center' class='equal tdtext'>";
						
						if($core >= 1){
							
						if($display == 1){
							
						if($supportname == 'B2B Prospector'){
						
						if($core == 1){
							
						echo "<span class='glyphicon glyphicon-ok core $SupportID'></span>";	
							
						}else{
							
						echo "<span class='number core $SupportID'>$core% OFF</span>";	
	
							
						}
						
						
						}else{
							
						echo "<span class='number core $SupportID'>$core</span>";	
						
						}
						
						}else{
							
							
						echo "<span class='glyphicon glyphicon-ok core $SupportID'></span>";	
						
							
						}
						
						}

						echo "</td>";
						echo "<td align='center' class='equal tdtext'>";
						
						if($prime >= 1){
							
						if($display == 1){
							
						if($supportname == 'B2B Prospector'){
						
						if($prime == 1){
							
						echo "<span class='glyphicon glyphicon-ok prime $SupportID'></span>";	
							
						}else{
							
						echo "<span class='number prime $SupportID'>$prime% OFF</span>";	
	
							
						}
						
						
						}else{
							
						echo "<span class='number prime $SupportID'>$prime</span>";	
						
						}
						
						}else{
							
							
						echo "<span class='glyphicon glyphicon-ok prime $SupportID'></span>";	
						
							
						}
						
						}

						echo "</td>";
						
						echo "<td align='center' class='equal'>";
						echo "</td>";
						
						echo "<td align='center' class='equal'>";
						echo "</td>";
						
						



					echo "</tr>";
					echo "<tr class='descriptionrow'>";
					
						echo "<td align='justify'  class='descriptionexplanation'>";
		
						echo $description;

						echo "</td>";
						
						echo "<td align='center' class='equal need'>";
						echo "</td>";
						
						echo "<td align='center' class='equal charity charityhide'>";
						echo "</td>";
						
						echo "<td align='center' class='equal key keyhide'>";
						echo "</td>";
						
						echo "<td align='center' class='equal core'>";
						echo "</td>";
						
						echo "<td align='center' class='equal prime'>";
						echo "</td>";
						
						echo "<td align='center' class='equal'>";
						echo "</td>";
						
						echo "<td align='center' class='equal'>";
						echo "</td>";
						
						


					echo "</tr>";
					
					
					if($supportname == 'Free event tickets per year'){
						
						
						
						echo "<tr >";
						echo "<th align='center' class='description'>";
		 
						

						echo "</th>";
						echo "<th align='center' class='equal'>";
		
						

						echo "</th>";
						echo "<th align='center' class='equal charityhide'>";
		
						echo "Member Price";

						echo "</th>";
						echo "<th align='center' class='equal keyhide'>";
		
						echo "Member Price";

						echo "</th>";
						echo "<th align='center' class='equal'>";
		
						echo "Non Member Price";

						echo "</th>";
						echo "<th align='center' class='equal'>";
						
						echo "<span class='savings-th'>Savings Members</span>";
					
						echo "</th>";
						
						echo "<th align='center' class='equal'>";
						
						echo "<span class='savings-th'>Savings Non Members</span>";
						
						echo "</th>";
						
						echo "<th align='center' class='equal'>";
						echo "</th>";
						


						echo "</tr>";
						
						$sqltickets = "SELECT * FROM ticketedevents ";
						$resulttickets = mysqli_query($conn, $sqltickets);
						$resultCheck = mysqli_num_rows($resulttickets);
						
						$i = 0;
						
						
						while ($row = mysqli_fetch_array($resulttickets)){
							
						$eventname = $row['EventName'];
						$memberprice = $row['MemberCost'];
						$nonmemberprice = $row['NoneMemberCost'];
						
						$i = $i + 1;
						
						echo "<tr >";
					
						echo "<td align='justify'  class='descriptionexplanation'>";
		
						echo $eventname;
						
						echo "<span><span class='info'>?</span></span>";

						echo "</td>";
						
						echo "<td align='center' class='equal '>";
						
						echo "<span class='glyphicon glyphicon-minus choice-ticket'></span>";	
						
						echo "</td>";
						
						echo "<td align='center' class='equal charityhide'>";
						
						echo "&pound;<span class='memberprice 1-$i'>$memberprice +VAT</span>";
						
						echo "</td>";
						
						echo "<td align='center' class='equal keyhide'>";
						
						echo "&pound;<span class='memberprice 1-$i'>$memberprice +VAT</span>";
						
						echo "</td>";
						
						echo "<td align='center' class='equal'>";
						
						echo "&pound;<span class='memberprice 2-$i'>$nonmemberprice +VAT</span>";
						
						echo "</td>";
						
						echo "<td align='center' class='equal'>";
						
						
						
						echo "</td>";
						
						echo "<td align='center' class='equal'>";
						echo "</td>";
						
						echo "<td align='center' class='equal'>";
						
						echo "<span class='glyphicon glyphicon-remove-sign resetticket'></span>";
						
						echo "</td>";
						


					echo "</tr>";
					
					echo "</tr>";
					echo "<tr class='descriptionrow'>";
					
						echo "<td align='justify'  class='descriptionexplanation'>";
		
						echo $description;

						echo "</td>";
						
						echo "<td align='center' class='equal need'>";
						echo "</td>";
						
						echo "<td align='center' class='equal charity charityhide'>";
						echo "</td>";
						
						echo "<td align='center' class='equal key keyhide'>";
						echo "</td>";
						
						echo "<td align='center' class='equal core'>";
						echo "</td>";
						
						echo "<td align='center' class='equal prime'>";
						echo "</td>";
						
						echo "<td align='center' class='equal'>";
						echo "</td>";
						
						
						echo "<td align='center' class='equal'>";
						echo "</td>";
						
						


					echo "</tr>";
						
						
						
					}	
					
					
					echo "<tr>";
					
						echo "<td align='right'  class='descriptionexplanation'>";
		
						echo "Total";

						echo "</td>";
						
						echo "<td align='center' class='equal'>";
						
						echo "<span class='total-tickets'></span>";
						
						echo "</td>";
						
						echo "<td align='center' class='equal charityhide'>";
						
						
						
						echo "</td>";
						
						echo "<td align='center' class='equal key keyhide'>";
						
						
						
						echo "</td>";
						
						echo "<td align='center' class='equal'>";
					
						echo "Total Savings";
						
						echo "</td>";
						
						echo "<td align='center' class='equal'>";
						
						echo "<span class='total-savings-tickets-members'></span>";
						
						
						echo "</td>";
						
						echo "<td align='center' class='equal'>";
						
						echo "<span class='total-savings-tickets-nonmembers'></span>";
						
						echo "</td>";
						
						
						
						


					echo "</tr>";
						
						
					}
					
				
				
					
					
					}
					
					
					}
					
					
					
					
					
					
					
				echo "</table>";
		
		
		
  
			echo "</div>";
  
		echo "</div>";
  echo "</div>";
echo "</div>";	  

}



?>


<table id='tablestyle2' >

<tr>

<td></td><td align='center'>Selected</td><td></td><td align='center'> <span class='glyphicon glyphicon-ok-sign'></span></td><td></td><td align='center' ><span class='glyphicon glyphicon-question-sign'></span></td><td></td><td align='center'><span class='glyphicon glyphicon-remove'></span></td><td></td>

</tr>

<?php 

$sql = "SELECT * FROM support";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)){
	
	$SupportID = $row['SupportID'];
	$Support = $row['Support'];

echo "<tr>";

echo "<td>$Support:</td><td align='center' class='$SupportID-selected'></td><td></td><td align='center' class='$SupportID-need'></td><td></td><td align='center' class='$SupportID-unsure'></td><td></td><td align='center' class='$SupportID-noneed'></td><td align='center' class='membership-selector membership-selector$SupportID' ></td>";

echo "</tr>";


}



?>

</table>


<script type="text/javascript">

$(document).ready(function(){

$(".descriptionrow").hide();
$(".panel-body").hide();
$(".savings-th").hide();
$(".resetticket").hide();

var charitycost = <?php echo $Charity; ?>;
var keycost = <?php echo $Key; ?>;
var corecost = <?php echo $Core; ?>;
var primecost = <?php echo $Prime; ?>;

var VAT = (20/ 100).toFixed(2);

var discount = (10/ 100).toFixed(2); // gives tthe percentage amount
  
$(".info").click(function(){
  $(this).closest("tr").next(".descriptionrow").toggle();
});  


$(".panel-heading").click(function(){
  $(this).next(".panel-body").toggle();
});

$("#yes-charity").click(function(){
	
  $("#yes-charity").removeClass("btn-default");
  $("#yes-charity").addClass("btn-success");
  $("#no-charity").removeClass("btn-danger");
  $("#no-charity").addClass("btn-default");
  $(".charityhide").show();
  $(".keyhide").hide();
  

   var multcore = corecost  * discount; // gives the value for subtract from main value
   var discontcore = corecost  - multcore;
   
   $(".corecost").text("");
   $(".corecost").text(discontcore.toFixed(2));
   
   
   var multprime = primecost  * discount; // gives the value for subtract from main value
   var discontprime = primecost  - multprime;
   
   $(".primecost").text("");
   $(".primecost").text(discontprime);
   
   
			
			
  
  
  
});   

$("#no-charity").click(function(){
	
  $("#no-charity").removeClass("btn-default");
  $("#no-charity").addClass("btn-danger");
  $("#yes-charity").removeClass("btn-success");
  $("#yes-charity").addClass("btn-default");
  $(".charityhide").hide();
  $(".keyhide").show();
  
  $(".corecost").text("");
   $(".corecost").text(corecost);
  
   
   $(".primecost").text("");
   $(".primecost").text(primecost);
  
});  


$("#yes-vat").click(function(){
	
  $("#yes-vat").removeClass("btn-default");
  $("#yes-vat").addClass("btn-success");
  $("#no-vat").removeClass("btn-danger");
  $("#no-vat").addClass("btn-default");
  $(".vathide").show();
  
   $(".charitycost").text("");
   $(".charitycost").text(charitycost);
  
   
   $(".keycost").text("");
   $(".keycost").text(keycost);
   
   if($("#yes-charity").hasClass("btn-success")){
	   
	var multcore = corecost  * discount; // gives the value for subtract from main value
   var discontcore = corecost  - multcore;
   
   $(".corecost").text("");
   $(".corecost").text(discontcore.toFixed(2));
   
   
   var multprime = primecost  * discount; // gives the value for subtract from main value
   var discontprime = primecost  - multprime;
   
   $(".primecost").text("");
   $(".primecost").text(discontprime);
	   
	   
   }else{
   
   
   $(".corecost").text("");
   $(".corecost").text(corecost);
  
   
   $(".primecost").text("");
   $(".primecost").text(primecost);
   
   }
  
  
  
  
   <?php
   
  
  
   $sql = "SELECT * FROM ticketedevents";
   $result = mysqli_query($conn, $sql);
   
   $d = 0;

  while ($row = mysqli_fetch_array($result)){
	  
	 $memberprice = $row['MemberCost'];
	 $nonmemberprice = $row['NoneMemberCost'];
  
   $d = $d + 1;
   
   echo " var pricewithvatmember".$d." = '$memberprice + ' + 'VAT';";
   echo "var pricewithvatnonmember".$d." = '$nonmemberprice + ' + 'VAT';";
   
   echo "$('.memberprice.1-".$d."').text('');";
   echo "$('.memberprice.2-".$d."').text('');";
   
   echo "$('.memberprice.1-".$d."').text(pricewithvatmember".$d.");";
   echo "$('.memberprice.2-".$d."').text(pricewithvatnonmember".$d.");";
   
   
   
  }
  
  
  ?>
  
  
 

  
});   

$("#no-vat").click(function(){
	
  $("#no-vat").removeClass("btn-default");
  $("#no-vat").addClass("btn-danger");
  $("#yes-vat").removeClass("btn-success");
  $("#yes-vat").addClass("btn-default");
  $(".vathide").hide();
  
   if($("#yes-charity").hasClass("btn-success")){
	   
   var multcharity = charitycost  * VAT; // gives the value for subtract from main value
   var vatcharity = charitycost  + multcharity;
   
   $(".charitycost").text("");
   $(".charitycost").text(vatcharity);
   
   var multcore = corecost  * discount; // gives the value for subtract from main value
   var discontcore = corecost  - multcore;
	   	   
   var multcore = discontcore  * VAT; // gives the value for subtract from main value
   var vatcore = discontcore  + multcore;
   
   $(".corecost").text("");
   $(".corecost").text(vatcore.toFixed(2));
   $(".vathide").hide();
   
   
   var multprime = primecost  * discount; // gives the value for subtract from main value
   var discontprime = primecost  - multprime;
   
   var multprime = discontprime  * VAT; // gives the value for subtract from main value
   var vatprime = discontprime  + multprime;
   
   $(".primecost").html("");
   $(".primecost").html(vatprime.toFixed(2));
	   
	   
	   
   }else{
  
   var multcharity = charitycost  * VAT; // gives the value for subtract from main value
   var vatcharity = charitycost  + multcharity;
   
   $(".charitycost").text("");
   $(".charitycost").text(vatcharity);
  
   var multkey = keycost  * VAT; // gives the value for subtract from main value
   var vatkey = keycost  +   multkey;
   
   $(".keycost").text("");
   $(".keycost").text(vatkey);
   
  
   var multcore = corecost  * VAT; // gives the value for subtract from main value
   var vatcore = corecost  + multcore;
   
   $(".corecost").text("");
   $(".corecost").text(vatcore);
   $(".vathide").hide();
   
   
   var multprime = primecost  * VAT; // gives the value for subtract from main value
   var vatprime = primecost  + multprime;
   
   $(".primecost").html("");
   $(".primecost").html(vatprime);
   
   
   }
   
  
  <?php
  
  
  
  
   $sql = "SELECT * FROM ticketedevents";
   $result = mysqli_query($conn, $sql);
   
   $p = 0;

  while ($row = mysqli_fetch_array($result)){
	  
	 $memberprice = $row['MemberCost'];
	 $nonmemberprice = $row['NoneMemberCost'];
  
   $p = $p + 1;
  
   echo "var vatamountmember".$p." = $memberprice  * VAT; ";
   echo "var pricewithvatmember".$p." = $memberprice + vatamountmember".$p.";";
   
   echo "var vatamountnonmember".$p." = $nonmemberprice  * VAT;";
   echo "var pricewithvatnonmember".$p." = $nonmemberprice + vatamountnonmember".$p.";";
   
   echo "pricewithvatmember".$p." = pricewithvatmember".$p.".toFixed(2);";
   echo "pricewithvatnonmember".$p." = pricewithvatnonmember".$p.".toFixed(2);";
   
   echo "$('.memberprice.1-".$p."').text('');";
   echo "$('.memberprice.2-".$p."').text('');";
   
   echo "$('.memberprice.1-".$p."').text(pricewithvatmember".$p.");";
   echo "$('.memberprice.2-".$p."').text(pricewithvatnonmember".$p.");";
   
   
  }
   
   
   
  ?>
  
}); 


$(document).on('click', '.resetticket', function() {
	
	$(this).closest('tr').find('td:nth-child(2)').find(".choice-ticket").addClass("glyphicon-minus");
	$(this).closest('tr').find('td:nth-child(2)').find(".choice-ticket").text("");
	$(this).closest('tr').find('td:nth-child(6)').text("");
	$(this).closest('tr').find('td:nth-child(7)').text("");
	$(this).hide();
	
	var sum = 0;
	
	 $(".choice-ticket").each(function(){
		
        sum += +$(this).text();
		
    });
	
    $(".total-tickets").text(sum);
	
	var summembers = 0;
	
	 $(".ticket-saving-members").each(function(){
		 
		 valuetaken = $(this).text().split(" ");
		 
		 actualnumber = valuetaken[0].replace('£', '');;
		
        summembers += +actualnumber;
		
    });
	
	var sumnonmembers = 0;
	
	 $(".ticket-saving-nonmembers").each(function(){
		 
		 valuetaken = $(this).text().split(" ");
		 
		 actualnumber = valuetaken[0].replace('£', '');;
		
        sumnonmembers += +actualnumber;
		
    });
	
    $(".total-savings-tickets-members").text("£" + summembers.toFixed(2));
	$(".total-savings-tickets-nonmembers").text("£" + sumnonmembers.toFixed(2));
	
}); 

$(document).on('click', '.choice-ticket', function() {

  if($(this).hasClass("glyphicon-minus")){
	  
	$(this).removeClass('glyphicon-minus');  
	$(this).text("1");
	$(this).css("font-weight", "bold");
	$(".savings-th").show();
	$(this).closest('tr').find('td:nth-child(8)').find('.resetticket').show();
	
	costmember = $(this).closest('tr').find('td:nth-child(3)').find(".memberprice").text().split(" ");
	costnonmember = $(this).closest('tr').find('td:nth-child(5)').find(".memberprice").text().split(" ");
	number = $(this).closest('tr').find('td:nth-child(2)').find(".choice-ticket").text();
	savingmember = costmember[0] * number;
	savingnonmember = costnonmember[0] * number;
	
	if($("#no-vat").hasClass("btn-danger")){
		
		vat = "";
		
	}else{
		
		vat = " +VAT";
		
	}

	$(this).closest('tr').find('td:nth-child(6)').html("<span class='ticket-saving-members'>£" + savingmember.toFixed(2) + vat +"</span>");
	$(this).closest('tr').find('td:nth-child(7)').html("<span class='ticket-saving-nonmembers'>£" + savingnonmember.toFixed(2) + vat +"</span>");
	
	
	var sum = 0;
	
    $(".choice-ticket").each(function(){
		
        sum += +$(this).text();
		
    });
	
    $(".total-tickets").text(sum);
	
	
	var summembers = 0;
	
	 $(".ticket-saving-members").each(function(){
		 
		 valuetaken = $(this).text().split(" ");
		 
		 actualnumber = valuetaken[0].replace('£', '');;
		
        summembers += +actualnumber;
		
    });
	
	var sumnonmembers = 0;
	
	 $(".ticket-saving-nonmembers").each(function(){
		 
		 valuetaken = $(this).text().split(" ");
		 
		 actualnumber = valuetaken[0].replace('£', '');;
		
        sumnonmembers += +actualnumber;
		
    });
	
    $(".total-savings-tickets-members").text("£" + summembers.toFixed(2));
	$(".total-savings-tickets-nonmembers").text("£" + sumnonmembers.toFixed(2));
	
	
	  
	  
  }else{
	  
	  number = $(this).text();
	  addnumber = parseInt(number) + 1;	  
	  $(this).text(addnumber);
	  
	  costmember = $(this).closest('tr').find('td:nth-child(3)').find(".memberprice").text().split(" ");
	  costnonmember = $(this).closest('tr').find('td:nth-child(5)').find(".memberprice").text().split(" ");
	  number = $(this).closest('tr').find('td:nth-child(2)').find(".choice-ticket").text();
	  savingmember = costmember[0] * number;
	  savingnonmember = costnonmember[0] * number;
	  
	  
	if($("#no-vat").hasClass("btn-danger")){
		
		vat = "";
		
	}else{
		
		vat = " +VAT";
		
	}

	$(this).closest('tr').find('td:nth-child(6)').html("<span class='ticket-saving-members'>£" + savingmember.toFixed(2) + vat +"</span>");
	$(this).closest('tr').find('td:nth-child(7)').html("<span class='ticket-saving-nonmembers'>£" + savingnonmember.toFixed(2) + vat +"</span>");
	
	var sum = 0;
    $(".choice-ticket").each(function(){
       
	   sum += +$(this).text();
		
		
    });
    $(".total-tickets").text(sum);
	
	var summembers = 0;
	
	 $(".ticket-saving-members").each(function(){
		 
		 valuetaken = $(this).text().split(" ");
		 
		 actualnumber = valuetaken[0].replace('£', '');;
		
        summembers += +actualnumber;
		
    });
	
	var sumnonmembers = 0;
	
	 $(".ticket-saving-nonmembers").each(function(){
		 
		 valuetaken = $(this).text().split(" ");
		 
		 actualnumber = valuetaken[0].replace('£', '');;
		
        sumnonmembers += +actualnumber;
		
    });
	
    $(".total-savings-tickets-members").text("£" + summembers.toFixed(2));
	$(".total-savings-tickets-nonmembers").text("£" + sumnonmembers.toFixed(2));
	  
  }
	  
	  
	  
	  
    
 });  

$(document).on('click', '.selector', function() {
	
	classname = $(this).attr('class');
	  
  if($(this).hasClass("glyphicon-minus")){
	  
	  $(this).removeClass( 'glyphicon-minus');
	  $(this).addClass( 'glyphicon-ok');
	  $(this).addClass( 'selected');
	  
	  
	  $(this).closest('td').next('td').find('.charity').removeClass('glyphicon-ok');
	  $(this).closest('tr').find('td:nth-child(4)').find('.key').removeClass('glyphicon-ok');
	  $(this).closest('tr').find('td:nth-child(5)').find('.core').removeClass('glyphicon-ok');
	  $(this).closest('tr').find('td:nth-child(6)').find('.prime').removeClass('glyphicon-ok');
		
	  if($(this).closest('tr').find('td:nth-child(3)').find('.charity').hasClass("number")){
	 
	  $(this).closest('td').next('td').find('.charity').addClass('charitycount');
	  $(this).closest('td').next('td').find('.charity').addClass('greentick-circle');
	  
	  }else{
		 
	  $(this).closest('td').next('td').find('.charity').addClass('glyphicon-ok-sign');
	  $(this).closest('td').next('td').find('.charity').addClass('charitycount');
	  $(this).closest('td').next('td').find('.charity').addClass('greentick');
		  
	  }
			  
	  $(this).closest('tr').find('td:nth-child(4)').find('.key').addClass('glyphicon-ok-sign');
	  $(this).closest('tr').find('td:nth-child(4)').find('.key').addClass('keycount');
	  $(this).closest('tr').find('td:nth-child(4)').find('.key').addClass('greentick');
	  
	  if($(this).closest('tr').find('td:nth-child(5)').find('.core').hasClass("number")){
			  
	  $(this).closest('tr').find('td:nth-child(5)').find('.core').addClass('corecount');
	  $(this).closest('tr').find('td:nth-child(5)').find('.core').addClass('greentick-circle');
	  
	  }else{
		  
	  $(this).closest('tr').find('td:nth-child(5)').find('.core').addClass('glyphicon-ok-sign');
	  $(this).closest('tr').find('td:nth-child(5)').find('.core').addClass('corecount');
	  $(this).closest('tr').find('td:nth-child(5)').find('.core').addClass('greentick');
		   
	  }
	  
	  if($(this).closest('tr').find('td:nth-child(6)').find('.prime').hasClass("number")){
		
	   $(this).closest('tr').find('td:nth-child(6)').find('.prime').addClass('primecount');
	   $(this).closest('tr').find('td:nth-child(6)').find('.prime').addClass('greentick-circle');
		  
	  }else{
			  
	   $(this).closest('tr').find('td:nth-child(6)').find('.prime').addClass('glyphicon-ok-sign');
	   $(this).closest('tr').find('td:nth-child(6)').find('.prime').addClass('primecount');
	   $(this).closest('tr').find('td:nth-child(6)').find('.prime').addClass('greentick');
	   
	   
	  }
			  
	  
	  
	 
	  
	  
	 
	  
	  
	  
  } else {
	  
  
	  if($(this).hasClass("glyphicon-ok")){
	  
	  
	  $(this).removeClass( 'glyphicon-ok');
	  $(this).addClass('glyphicon-question-sign');
	  
	  $(this).closest('td').next('td').find('.charity').removeClass('glyphicon-ok-sign greentick greentick-circle charitycount');
	  $(this).closest('tr').find('td:nth-child(4)').find('.key').removeClass('glyphicon-ok-sign greentick greentick-circle keycount');
	  $(this).closest('tr').find('td:nth-child(5)').find('.core').removeClass('glyphicon-ok-sign greentick greentick-circle corecount');
	  $(this).closest('tr').find('td:nth-child(6)').find('.prime').removeClass('glyphicon-ok-sign greentick greentick-circle primecount');
	 
	  
	  if($(this).closest('tr').find('td:nth-child(3)').find('.charity').hasClass("number")){
		  
	  $(this).closest('td').next('td').find('.charity').addClass('unsure-charity');
	  $(this).closest('td').next('td').find('.charity').addClass('unsure-circle');
	  
	  }else{
		  
	  $(this).closest('td').next('td').find('.charity').addClass('glyphicon-question-sign');
	  $(this).closest('td').next('td').find('.charity').addClass('unsure-charity');
	  $(this).closest('td').next('td').find('.charity').addClass('unsure');  
		  
	  }
	  
	  $(this).closest('tr').find('td:nth-child(4)').find('.key').addClass('glyphicon-question-sign');
	  $(this).closest('tr').find('td:nth-child(4)').find('.key').addClass('unsure-key');
	  $(this).closest('tr').find('td:nth-child(4)').find('.key').addClass('unsure');
	  
	  if($(this).closest('tr').find('td:nth-child(5)').find('.core').hasClass("number")){
	  
	  $(this).closest('tr').find('td:nth-child(5)').find('.core').addClass('unsure-core');
	  $(this).closest('tr').find('td:nth-child(5)').find('.core').addClass('unsure-circle');
	  
	  }else{
		  
	  $(this).closest('tr').find('td:nth-child(5)').find('.core').addClass('glyphicon-question-sign');
	  $(this).closest('tr').find('td:nth-child(5)').find('.core').addClass('unsure-core');
	  $(this).closest('tr').find('td:nth-child(5)').find('.core').addClass('unsure');  
		  
		  
	  }
	  
	  if($(this).closest('tr').find('td:nth-child(6)').find('.prime').hasClass("number")){
	  
	  $(this).closest('tr').find('td:nth-child(6)').find('.prime').addClass('unsure-prime');
	  $(this).closest('tr').find('td:nth-child(6)').find('.prime').addClass('unsure-circle');
	  
	  }else{
		  
	  $(this).closest('tr').find('td:nth-child(6)').find('.prime').addClass('glyphicon-question-sign');
	  $(this).closest('tr').find('td:nth-child(6)').find('.prime').addClass('unsure-prime');
	  $(this).closest('tr').find('td:nth-child(6)').find('.prime').addClass('unsure');  
		  
		  
	  }
	  

	   
		}else {
			
			
		 if($(this).hasClass("glyphicon-question-sign")){	
	  
			  $(this).removeClass('glyphicon-question-sign');
			  $(this).addClass('glyphicon-remove');
			  $(this).closest('td').next('td').find('.charity').removeClass('glyphicon-question-sign unsure-charity unsure unsure-circle');
			  $(this).closest('tr').find('td:nth-child(4)').find('.key').removeClass('glyphicon-question-sign unsure-key unsure unsure-circle');
		      $(this).closest('tr').find('td:nth-child(5)').find('.core').removeClass('glyphicon-question-sign unsure-core unsure unsure-circle');
			  $(this).closest('tr').find('td:nth-child(6)').find('.prime').removeClass('glyphicon-question-sign unsure-prime unsure unsure-circle');
	 
			  if($(this).closest('tr').find('td:nth-child(3)').find('.charity').hasClass("number")){
			  
			  $(this).closest('td').next('td').find('.charity').addClass('redcross-circle');
			  
			  }else{
				  
			  $(this).closest('td').next('td').find('.charity').addClass('glyphicon-remove-sign');
			  $(this).closest('td').next('td').find('.charity').addClass('redcross');
				  
			  }
			 
			  $(this).closest('tr').find('td:nth-child(4)').find('.key').addClass('glyphicon-remove-sign');
			  $(this).closest('tr').find('td:nth-child(4)').find('.key').addClass('redcross');
			  
			  if($(this).closest('tr').find('td:nth-child(5)').find('.core').hasClass("number")){
			  
			  $(this).closest('tr').find('td:nth-child(5)').find('.core').addClass('redcross-circle');
			  
			  }else{
				  
			  $(this).closest('tr').find('td:nth-child(5)').find('.core').addClass('glyphicon-remove-sign');
			  $(this).closest('tr').find('td:nth-child(5)').find('.core').addClass('redcross');  
				  
			  }
			  
			  
			  if($(this).closest('tr').find('td:nth-child(6)').find('.prime').hasClass("number")){
			  
			  $(this).closest('tr').find('td:nth-child(6)').find('.prime').addClass('redcross-circle');	 

			  }else{
				  
			  $(this).closest('tr').find('td:nth-child(6)').find('.prime').addClass('glyphicon-remove-sign');
			  $(this).closest('tr').find('td:nth-child(6)').find('.prime').addClass('redcross');	   
				  
				  
			  }
			  
			 
	  
	  
		 
		 } else { 
			 
			   if($(this).hasClass("glyphicon-remove")){	
	  
			  $(this).removeClass( 'glyphicon-remove');
			  $(this).addClass( 'glyphicon-minus');
			  $(this).removeClass( 'selected');
			  
			  $(this).closest('td').next('td').find('.charity').removeClass('glyphicon-remove-sign');
			  $(this).closest('td').next('td').find('.charity').removeClass('redcross');
			  $(this).closest('td').next('td').find('.charity').removeClass('redcross-circle');
			 
			  $(this).closest('tr').find('td:nth-child(4)').find('.key').removeClass('glyphicon-remove-sign');
			  $(this).closest('tr').find('td:nth-child(4)').find('.key').removeClass('redcross');
			  $(this).closest('tr').find('td:nth-child(4)').find('.key').removeClass('redcross-circle');
			  
			  $(this).closest('tr').find('td:nth-child(5)').find('.core').removeClass('glyphicon-remove-sign');
			  $(this).closest('tr').find('td:nth-child(5)').find('.core').removeClass('redcross');
			  $(this).closest('tr').find('td:nth-child(5)').find('.core').removeClass('redcross-circle');
			  
			  $(this).closest('tr').find('td:nth-child(6)').find('.prime').removeClass('glyphicon-remove-sign');
			  $(this).closest('tr').find('td:nth-child(6)').find('.prime').removeClass('redcross');	  
			  $(this).closest('tr').find('td:nth-child(6)').find('.prime').removeClass('redcross-circle');	  
			  
			  if($(this).closest('tr').find('td:nth-child(3)').find('.charity').hasClass("number")){
			
			  }else{
				  
			  $(this).closest('td').next('td').find('.charity').addClass('glyphicon-ok');
			  
			  }
			  
			  $(this).closest('tr').find('td:nth-child(4)').find('.key').addClass('glyphicon-ok');
			  
			  if($(this).closest('tr').find('td:nth-child(5)').find('.core').hasClass("number")){
				  
			  }else{
				 
			  $(this).closest('tr').find('td:nth-child(5)').find('.core').addClass('glyphicon-ok');
			  
			  }
			  
			  if($(this).closest('tr').find('td:nth-child(6)').find('.prime').hasClass("number")){
			
			  }else{
				  
			  $(this).closest('tr').find('td:nth-child(6)').find('.prime').addClass('glyphicon-ok');
			  
			  }
			 
			 
		 }
	  
	}
  
}

}


<?php

$sql = "SELECT * FROM support";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)){
	
$SupportID = $row['SupportID'];




echo "group".$SupportID." = $('.tablerow.".$SupportID."').length;";
echo "group".$SupportID."selected = $('.selected.".$SupportID."').length;";

echo "selectedneed".$SupportID." = $('.glyphicon-ok.selector.".$SupportID."').length;";
echo "selectedunsure".$SupportID." = $('.glyphicon-question-sign.selector.".$SupportID."').length;";
echo "selectedremove".$SupportID." = $('.glyphicon-remove.selector.".$SupportID."').length;";

echo "$('.".$SupportID."-selected').text(group".$SupportID."selected + '/' + group".$SupportID.");";
echo "$('.".$SupportID."-need').text(selectedneed".$SupportID.");";
echo "$('.".$SupportID."-unsure').text(selectedunsure".$SupportID.");";
echo "$('.".$SupportID."-noneed').text(selectedremove".$SupportID.");";

echo "charitycount".$SupportID." = $('.charitycount.".$SupportID."').length;";
echo "keycount".$SupportID." = $('.keycount.".$SupportID."').length;";
echo "corecount".$SupportID." = $('.corecount.".$SupportID."').length;";
echo "primecount".$SupportID." = $('.primecount.".$SupportID."').length;";

echo "unsurecharitycount".$SupportID." = $('.unsure-charity.".$SupportID."').length;";
echo "unsurekeycount".$SupportID." = $('.unsure-key.".$SupportID."').length;";
echo "unsurecorecount".$SupportID." = $('.unsure-core.".$SupportID."').length;";
echo "unsureprimecount".$SupportID." = $('.unsure-prime.".$SupportID."').length;";

echo "unsurecharitycounthalf".$SupportID." = unsurecharitycount".$SupportID."/2;";
echo "unsurekeycounthalf".$SupportID." = unsurekeycount".$SupportID."/2;";
echo "unsurecorecounthalf".$SupportID." = unsurecorecount".$SupportID."/2;";
echo "unsureprimecounthalf".$SupportID." = unsureprimecount".$SupportID."/2;";


echo "charitycount".$SupportID."full = charitycount".$SupportID." + unsurecharitycounthalf".$SupportID.";";
echo "keycount".$SupportID."full = keycount".$SupportID." + unsurekeycounthalf".$SupportID.";";
echo "corecount".$SupportID."full = corecount".$SupportID." + unsurecorecounthalf".$SupportID.";";
echo "primecount".$SupportID."full = primecount".$SupportID." + unsureprimecounthalf".$SupportID.";";


echo "if ($('#yes-charity').hasClass('btn-success')){";


echo "if (charitycount".$SupportID."full == corecount".$SupportID."full && charitycount".$SupportID."full == primecount".$SupportID."full){";


echo "$('.membership-selector".$SupportID."').text('Charity');";
echo "$('.membership-selector".$SupportID."').css('background-color','#afdcea');";
echo "$('.membership-selector".$SupportID."').css('color','white');";
echo "$('.membership-selector".$SupportID."').css('font-weight','bold');";



echo "} else {";
	
	
	
echo "if (charitycount".$SupportID."full < corecount".$SupportID."full && charitycount".$SupportID."full < primecount".$SupportID."full && corecount".$SupportID."full == primecount".$SupportID."full){";


echo "$('.membership-selector".$SupportID."').text('Core');";
echo "$('.membership-selector".$SupportID."').css('background-color','#00a291');";
echo "$('.membership-selector".$SupportID."').css('color','white');";
echo "$('.membership-selector".$SupportID."').css('font-weight','bold');";



echo "} else {";
	
	
echo "if (charitycount".$SupportID."full <= corecount".$SupportID."full && charitycount".$SupportID."full <= primecount".$SupportID."full && corecount".$SupportID."full < primecount".$SupportID."full){";


echo "$('.membership-selector".$SupportID."').text('Prime');";
echo "$('.membership-selector".$SupportID."').css('background-color','#fecd50');";
echo "$('.membership-selector".$SupportID."').css('color','white');";
echo "$('.membership-selector".$SupportID."').css('font-weight','bold');";



echo "}";
	
	
	
echo "}";




	
	
	
	
	
	
	
echo "}";


echo "}else{";
	
	
echo "if (keycount".$SupportID."full == corecount".$SupportID."full && keycount".$SupportID."full == primecount".$SupportID."full){";


echo "$('.membership-selector".$SupportID."').text('Key');";
echo "$('.membership-selector".$SupportID."').css('background-color','#00a5c6');";
echo "$('.membership-selector".$SupportID."').css('color','white');";
echo "$('.membership-selector".$SupportID."').css('font-weight','bold');";



echo "} else {";
	
	
	
echo "if (keycount".$SupportID."full < corecount".$SupportID."full && keycount".$SupportID."full < primecount".$SupportID."full && corecount".$SupportID."full == primecount".$SupportID."full){";


echo "$('.membership-selector".$SupportID."').text('Core');";
echo "$('.membership-selector".$SupportID."').css('background-color','#00a291');";
echo "$('.membership-selector".$SupportID."').css('color','white');";
echo "$('.membership-selector".$SupportID."').css('font-weight','bold');";



echo "} else {";
	
	
echo "if (keycount".$SupportID."full <= corecount".$SupportID."full && keycount".$SupportID."full <= primecount".$SupportID."full && corecount".$SupportID."full < primecount".$SupportID."full){";


echo "$('.membership-selector".$SupportID."').text('Prime');";
echo "$('.membership-selector".$SupportID."').css('background-color','#fecd50');";
echo "$('.membership-selector".$SupportID."').css('color','white');";
echo "$('.membership-selector".$SupportID."').css('font-weight','bold');";




echo "}	";
	
	
	
echo "}";




	
	
	
	
	
	
	
echo "}";
	
	
	
	
	
	
	
echo "}";



}





?>
  
  
}); 


});
 







</script>

<?php

include 'include/footer.php';

?>