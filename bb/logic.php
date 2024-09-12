<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            background-color: #6482AD;
        }
        .container{
                            margin-left: 225px;
                            margin-top: 100px;
                            padding: 50px;
                            border: 1px solid black;
                            height: 150px;
                            width: 450px;
           justify-content: center;
           box-shadow: 0 0 10px rgb(54, 32, 14);
           border-radius: 20px;
           background-color: #E2DAD6;
        }

        .buttonback {
        background-color: #7FA1C3;
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
        .buttonback:hover {
        transform: translateY(-5px);
        }
        .buttonback:focus{
            background-color: #F082AC;
        }

        .btprint{
        background-color: #7FA1C3;
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
        .btprint:hover{
            transform: translateY(-5px);
        }
        .btprint:focus{
            background-color: #F082AC;
        }
    </style>
</head>
<body>
    <div class="container">

        <?php
        class Shell {
        public $harga;
        public $jumlah;
        public $jenis;
        public $ppn;
        
        public function __construct($harga, $jumlah, $jenis) {
            $this->harga = $harga;
            $this->jumlah = $jumlah;
            $this->jenis = $jenis;
            $this->ppn = 0.1*$harga;
        }
        
        public function hargaDasar(){
            return $this->harga * $this->jumlah;
        }

        public function total() {
            return $this->harga * $this->jumlah + $this->ppn;
        }
    }

    class Beli extends Shell {
        public function buktiTransaksi() {
            
            echo "<center>Jenis Bahan Bakar : {$this->jenis}<br>
            Dengan jumlah : {$this->jumlah}L
            <br>Harga per liter : Rp. " . number_format($this->harga, 0, ',', '.') . "
            <br>harga dasar : Rp. " . number_format($this->hargaDasar(), 0, ',', '.') . "
            <br>PPN (10%) : Rp. " . number_format($this->ppn, 0, ',', '.') . "
            <br><br>Total yang harus anda bayar : Rp. " . number_format($this->total(), 0, ',', '.') . "</center>";
            
        }
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $liter = floatval($_POST["liter"]);
        $fuel_type = $_POST["fuel_type"];
        
        switch ($fuel_type) {
            case "ShellSuper":
                $harga = 15000;
                break;
                case "SVPowerDiesel":
                    $harga = 10000;
                    break;
                    case "ShellVPowerDiesel":
                        $harga = 20000;
                        break;
                        case "ShellVPowerNitro":
                            $harga = 5000 ;
                            break;
                            default:
                            $harga = 0;
                        }
                        
                        $pembelian = new Beli($harga, $liter, $fuel_type,);
                        echo $pembelian->buktiTransaksi();
                    }
                    ?>
                    <br>
                    
                        <button name="input" class="buttonback"type="button"  onclick="history.back(-1)" > <i class="fa-solid fa-backward"></i> back</button>
                    
                    <button class="btprint" onclick=window.print()><i class="fa-solid fa-print"></i> cetak</button>
                    
</div>
</body>
</html>