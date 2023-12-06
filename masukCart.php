<?php 
session_start();
    if($_POST){
        include "koneksi.php";
        $qry_get_barang=mysqli_query($conn,"SELECT * from barang where Id_Barang ='".$_GET['Id_Barang']."'");
        $dt_barang=mysqli_fetch_array($qry_get_barang);
        $_SESSION['cart'][]=array(
            'Id_Barang'=>$dt_barang['Id_Barang'],
            'Foto_Barang'=>$dt_barang['Foto_Barang'],
            'Nama_Barang'=>$dt_barang['Nama_Barang'],
            'Harga_Barang'=>$dt_barang['Harga_Barang'],
            'Deskripsi_Barang'=>$dt_barang['Deskripsi_Barang'],
            // 'qty'=>$_POST['jumlah_pinjam']
        );
    }
    header('location: cart.php');
?>