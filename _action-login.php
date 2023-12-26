<?php
session_start();
include('koneksi.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_array($query);
        $_SESSION['user_id'] = $data['id'];
        $_SESSION['username'] = $data['username'];

        header('Location: index.php');
    } else {
?>
        <script>
            alert('Username atau Password tidak ditemukan');
            window.location.href = 'login.php';
        </script>
<?php
    }
} else {
    header('Location: login.php');
}
