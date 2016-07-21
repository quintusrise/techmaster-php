<?php
    $pattern = '/^[a-zA-Z0-9]{6,32}$/';
        $pattern_email = '/[a-z][a-z0-9._]{2,31}@[a-z0-9-]{3,}(.[a-z]{2,4}){1,2}$/';
if (isset($_POST['username']) && isset($_POST['password'])) {
            if (preg_match($pattern,$_POST['username']) && preg_match($pattern,$_POST['password']) && preg_match($pattern,$_POST['resetpassword'])) {
                if ($_POST['password'] == $_POST['resetpassword']) {
                    if (preg_match($pattern_email,$_POST['email'])) {
                        echo "ĐĂNG KÝ THÀNH CÔNG !";
                        echo "<br>";
                        echo "TÀI KHOẢN : " . $_POST['username'];
                        echo "<br>";
                        echo "MẬT KHẨU : " . md5($_POST['password']);
                        echo "<br>";
                        echo "EMAIL : " . $_POST['email'];
                        echo "<br>";
                        var_dump($_POST['email']);
                    }else{
                        echo "EMAIL NHẬP VÀO KHÔNG ĐÚNG ĐỊNH DẠNG NHÉ !";
                    }
                }else{
                    echo "BẠN CẦN NHẬP MẬT KHẨU CHO ĐÚNG !";
                }
            }
        }else{
            echo "BẠN ÉO ĐƯỢC ĐĂNG KÝ VÌ CHÓ TÍNH NHÉ !";
        }

 ?>