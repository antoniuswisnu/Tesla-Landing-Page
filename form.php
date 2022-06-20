<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="order-container">
        <div class="title">Formulir Pemesanan Barang</div>
        <div class="garis"></div>
            <!-- <div class="close">&times;</div> -->
            <form action="connect.php" method="POST">
                <div class="form-container">
                    <div class="input-box">
                        <label for="firstName">Nama Depan :</label>
                        <input type="text" placeholder="Nama Depan" name="firstName" id="firstName" required>
                    </div>

                    <div class="input-box">
                        <label for="lastName">Nama Belakang :</label>
                        <input type="text" placeholder="Nama Belakang" name="lastName" id="lastName" required>
                    </div>
                    <div class="input-box">
                        <label for="email">Email :</label>
                        <input type="text" placeholder="Email" name="email" id="email">
                    </div>
                    <div class="input-box">
                        <label for="addres">Alamat :</label>
                        <input type="text" placeholder="Alamat Lengkap" name="addres" id="addres" required>
                    </div>
                    <div class="input-box">
                        <label for="zipCode">zipCode :</label>
                        <input type="text" placeholder="zipCode" name="zipCode" id="zipCode" required>
                    </div>
                    <div class="input-box">
                        <label for="country">Negara :</label>
                        <input type="text" placeholder="Negara" name="country" id="country" required>
                    </div>
                    <div class="input-box">
                        <label for="city">Kota :</label>
                        <input type="text" placeholder="Kota" name="city" id="city" required>
                    </div>
                    <div class="input-box">
                        <label for="phone">No Telpon :</label>
                        <input type="text" placeholder="No Telpon" name="phone" id="phone" required>
                    </div>
                    <div class="input-box">
                        <label for="type">Tipe :</label>
                        <select name="type" placeholder="Tipe" class="option" required>
                            <option selected hidden value="">Pilih Tipe</option>
                            <option value="Model S">Model S</option>
                            <option value="Model X">Model X</option>
                            <option value="Model 3">Model 3</option>
                            <option value="Model Y">Model Y</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="amount">Jumlah :</label>
                        <input type="text" placeholder="Jumlah" name="amount" id="amount" required>
                    </div>

                    <button type="submit" class="pesan" name="submit">Order Now</button>
                </div>
            </form>
        </div>
    </div>    
</body>
</html>