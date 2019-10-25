<?php
require_once('database/xulicsdl.php'); 
if (session_id() == '') session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
    $email = $_POST['email']; 
    $password = $_POST['password']; 
    $user = getuserByEmail($email); 
    if ($user) { 
        $password_hash = $user['password']; 
        $checkPassword = password_verify($password, $password_hash); 
        if ($checkPassword) { 
            if ($user['active'] == 0) { 
                $_SESSION['dangky_message']  = 'Vui lòng kích hoạt tài khoản'; 
                header('Location:dangnhap.php'); 
            } else { 
                $_SESSION['name'] = $user['name']; 
                $_SESSION['email'] = $user['email']; 
                $_SESSION['user_id'] = $user['id']; 
                header('Location:index.php'); 
            }
        } else {
            die('Sai mat khau');
        }
    } else {
        die('Email đăng ký người dùng không tồn tại');
    }
}
?>
<div class="container">
    <div class="col-sm-10 col-lg-8 mx-auto bg-light py-5 my-5">
        <form action="dangnhap.php" method="post">
            <p class="display-4">Đăng Nhập</p>
            <?php
            if (isset($_SESSION['dangky_message'])) {
                echo "<div class='alert alert-success'>" . $_SESSION['dangky_message'] . "</div>";
                unset($_SESSION['dangky_message']);
            }
            ?>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" name="email" required class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required class="form-control" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Đăng Nhập</button>
        </form>
    </div>
</div>