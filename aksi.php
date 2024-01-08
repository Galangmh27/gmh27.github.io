<?php
include "db.php";
//Uji Tombol simpan jika di klik
if (isset($_POST['bsimpan'])){
    //persiapan simpan data
    $simpan = mysqli_query($koneksi, "INSERT INTO buku_tamu 
    ( nama,alamat)
                                        VALUE ( '$_POST[nama]',
                                                '$_POST[alamat]' )
                                    ");
    //jika simpan sukses
    if($simpan){
    echo "<script>
        alert('Simpan data sukses');
        document.location='guestbook.php?page2=capil';
        </script>";
    }else{
        echo "<script>
        alert('Simpan data gagal');
        document.location='guestbook.php?page2=capil';
        </script>";
    }
}
?>