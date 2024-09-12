<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            background-color: #E2DAD6;
        }
        h1{
            text-align: center;
        }
        .container{
            margin-left: 225px;
            margin-top: 100px;
            padding: 50px;
            border: 1px solid black;
            height: 170px;
            width: 450px;
           justify-content: center;
           box-shadow: 0 0 10px rgb(54, 32, 14);
           border-radius: 20px;
           background-color: #7FA1C3;
        }
       
           
        .button {
        background-color: #E2DAD6;
        border-radius: 8px;
        border-style: none;
        box-sizing: border-box;
        color: black;
        cursor: pointer;
        display: inline-block;
        font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        font-weight: 500;
        height: 40px;
        line-height: 20px;
        list-style: none;
        margin: 0;
        outline: none;
        padding: 10px 16px;
        position: relative;
        text-align: center;
        text-decoration: none;
        transition: color 100ms;
        vertical-align: baseline;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        }
        .button-:hover {
        transform: translateY(-1px);
        }


        .button:focus {
        background-color: #F082AC;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1><i class="fa-solid fa-gas-pump"></i> POM MINI</h1>
        <center>
            <form action="logic.php" method="post">
                <label for="liter">Masukkan Jumlah Liter:</label>
                <input type="number" step="0.01" id="liter" name="liter" required>
                <br><br>
                <label for="fuel_type">Pilih Tipe Bahan Bakar:</label>
                <select id="fuel_type" name="fuel_type" required>
                    <option value="ShellSuper">Shell Super</option>
                    <option value="SVPowerDiesel">Shell V-Power</option>
                    <option value="ShellVPowerDiesel">Shell V-Power Diesel</option>
                    <option value="ShellVPowerNitro">Shell V-Power Nitro</option>
                </select>
                <br><br>
                <input type="submit" value="Beli" class="button">
            </form>
        </center>
    </div>
</body>
</html>