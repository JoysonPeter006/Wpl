<html>
<head>
<script type="text/javascript">
function validateform()
{
    var w=document.forms["myform"]["fname"].value;
    var x=document.forms["myform"]["gender"].value;
    var y=document.forms['myform']["date"].value;
    var z=document.forms["myform"]["ph"].value;
    if(w=="")
    {
        alert("please enter the name");
        return false;
    }
    if(x=="")
    {
        alert("please enter the gender");
        return false;
    }
    if(y=="")
    {
        alert("please enter the date");
        return false;
    }
    if(z=="")
    {
        alert("please enter the phonenumber");
        return false;
    }
}
</script>
</head>
<body><center>my validation form</center>
<form name="myform" OnSubmit="return validateform" method="post">
<table border="1">
<tr><th>Name:</th>
<th>
<input type="text" name="fname"></th>
<tr><th>gender</th><th>
<input type="text" name="gender"></th></tr>
<tr><th>date of birth</th>
<th><input type="date" min="01-01-1995" max="30-05-2021" name="date"></th>
</tr><tr><th>phone number:</th><th><input type="text" name="ph"></th></tr>
</table><input type="submit" value="submit">
</form>
</body>
</html>
