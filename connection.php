<?php

$username = "id15696174_customer";
$password="";
$server ="localhost";
$db = "id15696174_customerdetails";


$con = mysqli_connect($server,$username,$password,$db);

/*if($con)
//echo "Connection successful";
{
    ?>
    <script>
        alert('Connection Successful');
    </script>
    <?php
}
else
{
    echo "No connection";
    die("no connection".mysqli_connect_error());//exit
}*/



?> 
 68  sparks foundation/css/style.css 
@@ -0,0 +1,68 @@
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

header
{
   width:100%;
    height:100vh;
    background-image:linear-gradient(to right, #8D54BF,#944BD3,#7A3DAF,#692C9F,#562284,#4B1C74);
    clip-path: polygon(0% 0%,100% 0%,100% 100%,0% 80%);
}

.mainheader
{
    width:100%;
    height:50px;
    background: #5E11A3 ;

    display:flex;
    flex-direction: row;
    justify-content: space-between;
    text-align:center;
}
.mainheader .logo
{
    width:50%;
    height:70px;
    line-height:2.9em;
    color:white;

}
.mainheader nav
{
    width:50%;
    height:100vh;
    line-height:2.9em;
    color:white;
    display:flex;
    justify-content: space-around;
    text-align: center;
}
.mainheader a
{
    color:white;
    text-decoration:none;
}
main
{
    width:100%;
    height:100px;
    color:white;
    font-size:2.9em;
    display:flex;
    justify-content: space-around;
    text-align: center;
}
@media(max-width:990px)
{
    .logo{
        width:100%;
    }
   .mainheader nav{
       width:100%;
       text-align:left;
   }
}