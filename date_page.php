<?php

    include("config.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $email = $_POST ['email'];
    $date_booking = $_POST['start'];
    $time_booking = $_POST['appt'];
    $message = $_POST['message'];

        $sql = "INSERT INTO book(Fname, Phone, Email, Date_Book, Time_Book, Message) VALUES ('$fname', '$phone', '$email', '$date_booking', '$time_booking', '$message')";
    
        if (mysqli_query($conn, $sql)) {
            echo "Data inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        // Close the connection
        $conn->close();
    }
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table booking</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            box-sizing: border-box;     
        }
        .hero {
            width: 100%;
            height: 100vh;
            /* background-image: linear-gradient(rgba(0,0,0,0.7), #3551b5), url("logo.png"); */
            background-position: center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        form {
            width: 150%;
            max-width: 700px;
           box-shadow: 0 0 50px rgba(0, 0, 0, 0.7);
           z-index: 1;
           border-radius: 10px;
           background: linear-gradient(45deg,hwb(0 8% 92% / 0.589),hsla(0, 0%, 0%, 0.475));
        }

        .input-group {
            margin-bottom: 20px;
            position: relative;
            border-radius: 10px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            outline: 0;
            border: 1px solid #fff;
            color: #fff;
            background: transparent;
            font-size: 15px;
            border-radius: 10px;
        }

        label {
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            padding: 10px;
            color: #fff;
            cursor: text;
            transition: 0.2s;
        }

        input:focus~label,
        input:valid~label,
        textarea:focus~label,
        textarea:valid~label {
            top: -30px;
            font-size: 14px;
        }

        button {
            padding: 10px 0;
            color: #fff;
            outline: none;
            background: transparent;
            border: 1px solid #fff;
            width: 100%;
            cursor: pointer;
            border-radius: 10px;
            background-color: #f58d17;
        }

        #myVideo {
            margin: 0;
            padding: 0;
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }
    </style>
</head>

<body>
    <div class="hero">
        <video autoplay muted loop id="myVideo">
            <source src="production_id_5101336 (2160p).mp4" type="video/mp4">
        </video>
        <form action="date_page.php" method="POST">
            <div class="input-group">
                <input type="name" id="name" name="fname" required>
                <label for="name">Your Name</label>
            </div>

            <div class="input-group">
                <input type="text" id="number" name="phone" required>
                <label for="number">Contact No. (whatsapp preferred)</label>
            </div>

            <div class="input-group">
                <input type="email" id="email" name="email" required>
                <label for="email">Email Id</label>
            </div>

            <div class="input-group">
                <input type="date" id="start" name="start">
                <label for="start">Date Of Booking</label>
            </div>
            

            <div class="input-group">
                <input type="time" id="appt" name="appt">
                <label for="appt">Time Of Booking</label>
            </div>

            <div class="input-group">
                <textarea id="message" rows="8" name="message" required></textarea>
                <label for="message">Message</label>
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>