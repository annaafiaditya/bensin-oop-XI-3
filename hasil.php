<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #d1d1d1;
        }

        .isi {
            background-color: #fff;
            width: 30%;
            height: 40%;
            border-radius: 25px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="isi">
        <?php
            class Chell {
                protected $ppn;
                private $SSuper,
                        $SVPower,
                        $SVPowerDiesel,
                        $SVPowerNitro;
                public $jumlah;
                public $jenis;
                
                function __construct() {
                    $this->ppn = 0.1;
                }
                
                public function setHarga ($tipe1,$tipe2,$tipe3,$tipe4) {
                    $this->SSuper = $tipe1;
                    $this->SVPower = $tipe2;
                    $this->SVPowerDiesel = $tipe3;
                    $this->SVPowerNitro = $tipe4;
                }
                
                public function getHarga() {
                    $data["SSuper"]= $this->SSuper;
                    $data["SVPower"]= $this->SVPower;
                    $data["SVPowerDiesel"]= $this->SVPowerDiesel;
                    $data["SVPowerNitro"]= $this->SVPowerNitro;
                    return $data;
                }
                
            }
    
            class Beli extends Chell {
                public function hargaBeli() {
                    $dataHarga = $this -> getHarga();
                    $hargaBeli = $this->jumlah * $dataHarga[$this->jenis];
                    // $hargaBayar = $hargaBeli + $hargappn;
                    return $hargaBeli;
                }
                
                public function hargappn() {
                    $hargappn = $this->hargaBeli() * $this->ppn;
                    return  $hargappn;
    
                }
    
                public function hargaAkhir() {
                    $hargaAkhir = $this->hargaBeli() + $this->hargappn();
                    return  $hargaAkhir;
    
                }
    
                public function cetakPembelian() {
                    echo "<center>";
                    echo "<h3>BUKTI TRANSAKSI PEMBELIAN</h3><br>";
                    echo "Jenis Bahan Bakar: " . $this->jenis ."<br>";
                    echo "Jumlah Liter: $this->jumlah L<br>";
                    echo "Harga Dasar : Rp." . number_format($this->hargabeli(), 0, '', '.') . "<br>"; 
                    echo "PPN (10%): " . $this->hargappn() ."<br><br>";
                    echo "Total Harga: " . $this->hargaAkhir() ."";
                    echo "</center>";
                }
    
            }
    
            if($_SERVER["REQUEST_METHOD"] == "POST") {
    
                
                $proses = new Beli();
                $proses->setHarga(15420, 16130, 18310, 16510);
                $proses->jenis = $_POST['jenis'];
                $proses->jumlah = $_POST['jumlah'];
    
                $proses->hargaBeli();
                $proses->cetakPembelian();
            }
        ?>
        <form action="bensin.php">
            <button type="submit">Kembali<<</button>
        </form>
    </div>
</body>
</html>

