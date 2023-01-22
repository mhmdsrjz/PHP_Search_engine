<html>
<head>

<script language="javascript"  src="jquery-3.1.1.min.js"></script>


    <style>
        body{
            font-family: Tahoma;
        }
		table td{
			font-size:12px;
			
		}
		table tr td:nth-child(3){
			padding-left:15px;
		}

    </style>


<script language="javascript">
$(document).ready(function(){
	
	$("#button").click(function(){
		
		$.post("search_proc.php", $("#search_form").serialize(), function(data){
		    $("#result_div").html(data);
        });
	});
	
});

</script>

</head>
<body style="text-align:center; ">

<div  style="width:800px;  background-color:#EBEBEB; margin-left:auto; margin-right:auto; padding-left:50px; padding-right:50px; border:3px solid #999;">

<div style="font-size: 30px; text-align: center; line-height: 60px; margin-bottom:30px; margin-top:20px; background:#CCCCCC;">
    Search Panel
</div>
<form name="search_form" id="search_form" action="post">
<table width="100%" height="135" border="0">
  <tr>
    <td width="54" align="center"><label for="checkbox"></label>
      <input type="radio" name="radio" id="radio" value="bool">
    <label for="radio"></label></td>
    <td width="185" align="center">Boolean Search :</td>
    <td width="834" align="center">
      <div style="float:left; margin-right:10px; ">    <input type="text" name="bool1_txt" id="bool1_txt">      </div>
      <div style="float:left;  margin-right:10px;">
        <select name="condition_cmb" id="condition_cmb" >
          <option value="-" selected> - </option>
          <option value="and" > And </option>
          <option value="or" > Or </option>
          <option value="not" > Not </option>
        </select>
      </div>
      <div>
        <input style="float:left" type="text" name="bool2_txt" id="bool2_txt"> 
      </div>
    </td>
  </tr>
  <tr>
    <td align="center"><input type="radio" name="radio" id="radio2" value="biword"></td>
    <td align="center">Biword Search : </td>
    <td align="left"><input type="text" name="biword_txt" id="biword_txt"></td>
  </tr>
  <tr>
    <td align="center"><input type="radio" name="radio" id="radio3" value="wild"></td>
    <td align="center">Wildcard Search : </td>
    <td align="left"><input type="text" name="wildcard_txt" id="wildcard_txt"></td>
  </tr>
  
   <tr>
    <td colspan="3" align="left" style="padding-left:15px;"><input type="button" name="button" id="button" value="Search"></td>
  </tr>
  
</table>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>


<br><br>

<div  style="width:800px; clear:both; background-color:#EBEBEB; margin-left:auto; margin-right:auto; padding-left:50px; padding-right:50px; border:3px solid #999;">
<div style="font-size: 20px; text-align: center; line-height: 40px; margin-bottom:30px; margin-top:20px; background:#CCCCCC;">
   Search Result 
</div>

<div id="result_div" style="margin-bottom:30px;">
-
</div>


</div>

</body>
</html>


