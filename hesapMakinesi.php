<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Hesap Makinesi</title>
</head>
<body>

<form action="" method="POST">
<div class="input-group mb-3">
  <span class="input-group-text">Sayı Bir</span>
  <input type="number" class="form-control" name="sayiBir" placeholder="Birinci Sayıyı Giriniz">
  <span class="input-group-text">Sayı İki</span>
    <input type="number" class="form-control" name="sayiIki" placeholder="İkinci Sayıyı Giriniz">
</div>
<select name="islem" class="form-select">
  <option selected>Lütfen Bir İşlem Seçiniz</option>
  <option value="toplama">Toplama</option>
  <option value="cikartma">Çıkartma</option>
  <option value="carpma">Çarpma</option>
  <option value="bolme">Bölme</option>
</select>
    <input type="submit" class="btn btn-light" name="gonder" value="hesapla">
</form>



<?php 
if(isset($_POST['gonder'])){
    $sayiBir = $_POST['sayiBir'];
    $sayiIki = $_POST['sayiIki'];
    $islem = $_POST['islem'];

    switch($islem){
        case 'toplama':
            echo $sayiBir + $sayiIki;
        break;
        case 'cikartma':
            echo $sayiBir - $sayiIki;
        break;
        case 'carpma':
            echo $sayiBir * $sayiIki;
        break;
        case 'bolme':
            echo $sayiBir / $sayiIki;
        break;
        default:
        echo 'Yanlış Değer Girdiniz';
    }
}

?>
</body>
</html>