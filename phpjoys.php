<html>
    <head>
        <style>
            body{
                background-color: blue;
                font-size:15px;
                font-variant: small-caps;
                <text-transform: uppercase;
            }
            table{
                font-size:20px;
            }</style>
            </head>
            <body><big><center>
                <form action="displayjoys.php" method="POST" name="form2"><table border="1" height="50%" width="20%"><caption>
                   ADD YOUR DETAILS</caption><tr><th>
                    Item code:</th><th><input type="text" name="itemcode"></th></tr><br><br><br><tr><th>
                    Item name:</th><th><input type="text" name="itemname"></th></tr><br><br><br><tr><th>
                    Item type:</th><th><select name="itype"><option name="itype">fruits</option><option name="itype">vegetables</option></select></th></tr><br><br><br><tr><th>
                    Available quantity:</th><th><input type="text" name="available"></th></tr><br><br><br><tr><th>
                    Date of expiry:</th><th><input type="date" name="expiry"></th></tr><br><br><br><tr><th>
                    <input type="submit" name="s1" value="save"></th><th>
                    <input type="submit" name="s2" value="show details"></th></tr>
                </center></big>
        </form>
        </body>
        </html>