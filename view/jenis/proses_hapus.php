<?php 

$id=$_GET['id'];

include '../../config/koneksi.php';

$query = mysqli_query($conn,"DELETE FROM jenis WHERE id_jenis ='$id_jenis'");

if($query){
    echo "<script>alert('data berhasil dihapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('data gagal dihapus')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}
?>