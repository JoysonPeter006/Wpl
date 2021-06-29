<html>
    <head><style>
            body{
                background-color: blue;
                font-size:15px;
            }
            table{
                font-size:20px;
            }</style>
            <script type="text/javascript">
  function validateform() {
  var w = document.forms["form2"]["itemcode"].value;
  var x = document.forms["form2"]["itemname"].value;
  var y = document.forms["form2"]["available"].value;
  var z = document.forms["form2"]["price"].value;
  if (w == "") 
  {
    alert("Please enter itemcode");
    return false;
  }
  if (x == "") 
  {
    alert("Please enter itemname");
    return false;
  }
  if (y == "")
  {
    alert("Please enter available quantity");
    return false;
  }
  if (z == "")
  {
    alert("Please enter price");
    return false;
  }
  if (isNaN(y))
    {alert("enter valid Quantity without specifying unit");
    return false;}
  if (isNaN(z))
    {alert("enter price");
    return false;}
  else
    return true;
  }
</script>
            </head>
            <body><big><center>
                <form onsubmit="return validateform()" action="exbill4.php" method="POST" name="form2"><table border="1" height="50%" width="20%"><caption>
                   ADD YOUR DETAILS</caption><tr><th>
                    Code:</th><th><input type="text" name="itemcode"></th></tr><br><br><br><tr><th>
                    Item Name:</th><th><input type="text" name="itemname"></th></tr><br><br><br><tr><th>
                    Item Type:</th><th><input type="text" name="itype"></th></tr><br><br><br><tr><th>
                    Quantity:</th><th><input type="text" name="available"></th></tr><br><br><br><tr><th>
                    price(for one unit):</th><th><input type="text" name="price"></th></tr><br><br><br><tr><th>
                    <input type="submit" name="s1" value="save"></th>
                    <th>
                    <input type="button" name="s2" value="show final bill"></th></tr>
                </center></big>
        </form>
        </body>
        </html>