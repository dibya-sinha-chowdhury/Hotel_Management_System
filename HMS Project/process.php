<?php
include ('database.php');
if (isset($_POST['Book'])) {
    $Name = $_POST['Name'];
    $ID = $_POST['ID'];
    $Address = $_POST['Address'];
    $Phone = $_POST['Phone'];
    $Gender = $_POST['Gender'];
    $DOB = $_POST['DOB'];
    $Nationality = $_POST['Nationality'];
    $Room = $_POST['Room'];
    $Package = $_POST['Package'];
    $Check_in_Date = $_POST['Check_in_Date'];
    $Check_out_Date = $_POST['Check_out_Date'];


    $query = mysqli_query($conn, "Insert into booking(Name, ID,Address,Phone,Gender, DOB, Nationality, Room, Package, Check_in_Date, Check_out_Date)
        Value('$Name', '$ID', '$Address', '$Phone','$Gender', '$DOB','$Nationality','$Room','$Package','$Check_in_Date','$Check_out_Date')");

    if ($query) {
        echo "<script>alert('Successful')</script>";

    } else {
        echo "<script>alert('Not Successful')</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBMS Project</title>

    <style type="text/css">
        * {
            text-decoration: none;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }


        header {
            background-color: #333;
            color: white;
            padding: 20px;
            margin-top: -10px;
            margin-left: -10px;
            margin-right: -10px;
            text-align: left;
            align-items: center;
            padding-top: 0.5cap;
        }

        main {
            display: flex;
            justify-content: space-around;
            padding: 20px;

        }

        .bookcontainer {
            height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 150px;
            gap: 2em;
            padding-bottom: 150px;
            padding-left: 10px;
            margin-left: -10px;
        }

        .bookcontainer1 {
            width: 800px;
            height: 750px;
            box-shadow: 5px 5px 25px #444;
            border-radius: 1.75em;
            padding: 10px 30px;
            gap: 2px;
            background-color: rgba(215, 235, 245, 0.926);
            font-size: 15px;
            justify-content: center;
            align-items: center;
        }

        #design {
            transform: translate(30%, 0%);
            width: 100%;
        }

        #taglineso {
            font-size: 8pt;
        }

        #textnull {
            transform: translate(25%, 0%);
        }

        #textnullnai {
            transform: translate(10%, 0%);
        }

        #button {
            display: block;
            padding: 0px;
            width: 150px;
            height: 30px;
            background-color: #333;
            color: white;
            text-decoration: none;
            text-transform: none;
            border-radius: 20em;
            list-style: none;
            font-size: large;
            justify-content: center;
            align-items: center;
            transform: translate(95%, 0%);

        }

        #text {
            transform: translate(5%, 8%);
        }

        #tagline {
            transform: translate(2.25%, -2%);
            font-size: 8pt;
        }

        footer {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: #444;
            color: #fff;
            align-content: center;
            justify-content: left;
            padding-left: 10px;
            margin-bottom: -10px;
            margin-left: -10px;
            margin-right: -10px;
            text-decoration: none;


        }
    </style>


</head>

<body>
    <header>
        <h1 style="bottom: margine 5px;margin-bottom: 0px; margin-left: 50px;">IDK Cottage</h1>
        <h5 style="top: margine -5px;bottom: margine 3px;margin-bottom: 10px;margin-top: 5px;margin-left: 50px;"
            id="tagline">We
            believe in luxury</h5>

    </header>


    <div class="bookcontainer">
        <div>
            <div class="bookcontainer1">
                <form method="POST" action="process.php" id="textnull">
                    <h1 id="textnullnai"><b>Your Details:</b> </Details>
                    </h1>
                    <br>
                    Name:<br>
                    <input type="text" name="Name" style="width: 400px;">
                    <br><br>
                    Passport/NID:<br>
                    <input type="text" name="ID" style="width: 400px;">
                    <br><br>
                    Address:<br>
                    <input type="text" name="Address" style="width: 400px;">
                    <br><br>
                    Phone:<br>
                    <input type="text" name="Phone" style="width: 400px;">
                    <br><br>

                    <label for="gender">Gender:</label>
                    <select id="gender" name="Gender">
                        <option value="">-</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>

                    <br><br>
                    Date of Birth:<br>
                    <input type="date" name="DOB" style="width: 400px;">
                    <br><br>
                    Nationality:<br>
                    <input type="text" name="Nationality" style="width: 400px;">
                    <br><br>
                    Room:<br>
                    <input type="text" name="Room" style="width: 400px;">
                    <br><br>

                    <label for="package">Package:</label>
                    <select id="package" name="Package">
                        <option value="-">-</option>
                        <option value="White_House">White House</option>
                        <option value="Paris_Cottage">Paris Cottage</option>
                        <option value="Golden_Cottage">Golden Cottage</option>
                        <option value="Agra_Mahal">Agra Mahal</option>
                    </select>

                    <br><br>
                    Check-in Date:<br>
                    <input type="date" name="Check_in_Date" style="width: 400px;">
                    <br><br>
                    Check-out Date:<br>
                    <input type="date" name="Check_out_Date" style="width: 400px;">
                    <br><br><br>
                    <!-- <ul id="button">
                        <li style="padding-left: 30px;" id="text" name="Book"><a href="Donebook.html">
                                <font color=#fff>Book now</font>
                            </a></li>
                    </ul> -->

                    <button type="submit" value="Book now" name="Book" id="button"><a href="Donebook.html">
                            <font color=#fff>Book now</font>
                        </a></button>

                    <br><br>
                </form>
            </div>
        </div>
    </div>






</body>

<footer>
    <h2 style="margin-bottom: 0px; padding-bottom: 0px;margin-left: 50px;"> IDK Cottage</h2>
    <h5 style="margin-top: 5px; padding-top: 0px;margin-bottom: 4em;margin-left: 60px;" id="taglineso">We believe in
        luxury</h5>
    <h2 style="margin-top: 5px;margin-bottom: 0px;padding-bottom: 0px;margin-left: 50px;">Location:</h2>
    <h5 style="margin-top: 10px;margin-bottom: 0px;padding-bottom: 0px;margin-left: 50px;">Pirer Bazar, Bateshwar</h5>
    <h5 style="margin-top: 0px; padding-top: 5px;margin-bottom: 4px;padding-bottom: 4px;margin-left: 50px;">Sylhet-3200,
        Bangladesh</h5><br>
    <h5 style="margin-top: 0px; padding-top: 5px;margin-bottom: 4px;padding-bottom: 4px;margin-left: 50px;">Contact:
        912319238198<br>E-mail: cottage@idk.com</h5>
</footer>

</html>