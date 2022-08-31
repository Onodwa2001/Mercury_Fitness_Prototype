<?php

    session_start();

    if (isset($_POST['done'])) {
        echo $_POST['house'] . '<br/>';
        echo $_POST['street'] . '<br/>';
        echo $_POST['suburb'] . '<br/>';
        echo $_POST['postal'] . '<br/>';

        echo '<br/>';

        echo $_POST['card'] . '<br/>';
        echo $_POST['holder'] . '<br/>';
        echo $_POST['cvv'] . '<br/>';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        * {
            font-family: sans-serif;
        }

        .inputs {
            display: grid;
            grid-template-columns: 50% 50%;
        }

        .order {
            width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .order input {
            margin-bottom: 10px;
            padding: 7px;
        }

        .order form {
            background-color: rgb(240, 240, 200);
            margin-top: 30px;
            padding-top: 20px;
        }

        .location h2 {
            text-align: center;
        }

        .payment h2 {
            text-align: center;
        }

        .location div {
            width: fit-content;
            margin: 0 auto;
        }

        .payment div {
            width: fit-content;
            margin: 0 auto;
        }

        .done {
            width: fit-content;
            margin: 0 auto;
        }

        .done button {
            padding: 7px;
            width: 540px;
            margin-bottom: 40px;
            margin-top: 30px;
            background-color: rgb(10, 200, 10);
            color: white;
            border: none;
        }

        .done button:hover {
            cursor: pointer;
        }

        .amount_to_pay {
            background-color: rgb(240, 240, 240);
            width: fit-content;
            margin: 0 auto;
            margin-top: 13px;
            padding: 10px;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.3);
        }

    </style>
</head>
<body>

    <div class="order">
        <form action="order.php" method="POST">
            <div class="inputs">
                <div class="location">
                    <h2>Give us your location</h2>
                    <div class="house-no">
                        <input type="number" placeholder="House No." name="house" id="">
                    </div>
                    <div class="street">
                        <input type="text" placeholder="Street Name" name="street" id="">
                    </div>
                    <div class="suburb">
                        <input type="text" placeholder="Suburb/City" name="suburb" id="">
                    </div>
                    <div class="postal">
                        <input type="number" placeholder="Postal Code" name="postal" id="">
                    </div>
                </div>

                <div class="payment">
                    <h2>Add payment details</h2>
                    <div class="card-no">
                        <input type="number" placeholder="Card No." name="card" id="">
                    </div>
                    <div class="holder">
                        <input type="text" placeholder="Card Holder" name="holder" id="">
                    </div>
                    <div class="cvv">
                        <input type="number" placeholder="cvv" name="cvv" id="">
                    </div>
                </div>

                <div class="amount_to_pay">
                    <!-- <br> -->
                    Balance: ZAR <?php echo number_format($_SESSION['total'], 2); ?>
                </div>
            </div>

            <div class="done">
                <br>
                <button name="done">Place Order</button>
            </div>
        </form>
    </div>

    
</body>
</html>