<?php include_once("index.html"); ?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
#MyForm{
 display: none;
 margin-top: 12px;
    width: 300px;
    border: 5px solid #ffff00;
    padding: 18px;
    background: #963131;
} 
</style>
<script>
$(document).ready(function()
{
 $('#Mybtn').click(function()
 {
   $('#MyForm').toggle(500);
  
   });
});
</script>
</head>
<body style="margin: 40px 0 0 60px;">
    <form style="padding: 2px;">
        <label>Enter Name:</label>
      <input type="text" name="name" id="input" placeholder="Enter your name" style="margin: 2px;" /></br>
      <label>Mob No:</label>
      <input type="number" name="mob" id="textOne" placeholder="Enter your Mob No" style="margin: 2px 0 1px 25px;" /></br>
        <label>Address:</label>
      <input type="text" name="Address" id="txtadd" placeholder="Enter your Address" style="margin: 3px 0 7px 26px;" /></br>
     </form>

<button id="Mybtn" style="margin-left: 18%" onclick="change()" >Edit Your Details</button>
<form id="MyForm" action="" method="post">
   <label>Enter Name:</label>
     <input type="text" name="name" id="output" style="margin: 2px;" /></br>
   <label>Mob No:</label>
     <input type="" name="mob" id="textTwo" style="margin: 2px 0 1px 25px;"/></br>
    <label>Address:</label>
      <input type="text" name="Address" id="txtadd1" style="margin: 3px 0 7px 26px;" /></br>
</form>
<script>
    function change(){
        var inputValue=document.getElementById('input').value;
        var output = document.getElementById('output');
        output.value=inputValue;

        var textOne = document.getElementById("textOne");
        var textTwo = document.getElementById("textTwo");
        //Get the value of textOne textbox input
        var textOneValue = textOne.value;
        var textTwoValue = textOneValue;
        //Assign the value of textOne textbox to textTwo textbox
        textTwo.value = textTwoValue;


        var txtaddValue=document.getElementById('txtadd').value;
        var txtadd1 = document.getElementById('txtadd1');
        txtadd1.value=txtaddValue;
    }
</script>
</body>
</html>
