<?php
include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$cek      = mysqli_query($connect, "select * from master where username='$username' and password='$password'");
$result   = mysqli_num_rows($cek);
$data = mysqli_fetch_array($cek);

if($result>0){
    if ($data['level'] == 'admin') {
        session_start();
        $_SESSION['username'] = $data['username'];
        // $data['level'] level digunaan untu memanggil value level dari username yang telah login dan disimpan dalam $_SESSION['level']
        $_SESSION['level'] 	  = $data['level'];
        echo "<script>alert('Selamat Datang, Admin.');/*document.location.href='master/index.php?aksi=admin&id=?'*/window.location = '../index.php?aksi=dok_v&id=?'</script>";

    }elseif($data['level'] == 'user'){
        session_start();
        $_SESSION['username'] = $data['username'];
        // $data['level'] level digunaan untu memanggil value level dari username yang telah login dan disimpan dalam $_SESSION['level']
        $_SESSION['level'] 	  = $data['level'];
        echo "<script>alert('Selamat Datang, dokter.');document.location.href='welcome_dokter.php'</script>";

    }elseif($data['level'] == 'perawat') {
        session_start();
        $_SESSION['username'] = $data['username'];
        // $data['level'] level digunaan untu memanggil value level dari username yang telah login dan disimpan dalam $_SESSION['level']
        $_SESSION['level'] = $data['level'];
        echo "<script>alert('Selamat Datang, perawat.');document.location.href='welcome_perawat.php'</script>";
    }elseif($data['level'] == 'pegawai') {
        session_start();
        $_SESSION['username'] = $data['username'];
        // $data['level'] level digunaan untu memanggil value level dari username yang telah login dan disimpan dalam $_SESSION['level']
        $_SESSION['level'] = $data['level'];
        echo "<script>alert('Selamat Datang, pegawai.');document.location.href='welcome_pegawai.php'</script>";
    }
}else{
    header("location:indexx.php");
}
?>