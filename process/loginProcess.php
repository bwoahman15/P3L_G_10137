<?php
    if(isset($_POST['Login'])){
        include('../db.php'); 
        $email = $_POST['email'];
        $password = $_POST['password'];
    

        $loginCustomer = mysqli_query($con, "SELECT * FROM customer WHERE email_customer = '$email'") or die(mysqli_error($con));
        $loginPegawai = mysqli_query($con, "SELECT * FROM pegawai WHERE email_pegawai = '$email'") or die(mysqli_error($con));
        $loginDriver = mysqli_query($con, "SELECT * FROM driver WHERE email_driver = '$email'") or die(mysqli_error($con));
        
        if(mysqli_num_rows($loginCustomer) != 0){
            $user = mysqli_fetch_array($loginCustomer);
            if(password_verify($password, $user[6])){
                session_start();
                $_SESSION['isLoginCustomer'] = true;
                $_SESSION['user'] = $user;
                echo
                    '<script>
                    alert("Login Sukses"); window.location = "../page/transaksi.php"
                    </script>';
            }else {
                echo
                    '<script>
                    alert("Email or Password Invalid");
                    window.location = "../page/loginPage.php"
                    </script>';
            }
        }
        else if(mysqli_num_rows($loginPegawai) != 0){
            $user = mysqli_fetch_array($loginPegawai);
            if(password_verify($password, $user[7])){
                $query = mysqli_query($con, "SELECT jabatan_pegawai FROM pegawai WHERE email_pegawai = '$email'") or die(mysqli_error($con));
                $jabatan = mysqli_fetch_array($query);

                if($jabatan['jabatan_pegawai'] == 'CS')
                {
                    session_start();
                    $_SESSION['isLoginCustomerService'] = true;
                    $_SESSION['user'] = $user;
                    echo
                        '<script>
                        alert("Login Sukses sebagai CS"); window.location = "../page/dashboardPage.php"
                        </script>';
                }
                else if($jabatan['jabatan_pegawai'] == 'Admin')
                {
                    session_start();
                    $_SESSION['isLoginAdmin'] = true;
                    $_SESSION['user'] = $user;
                    echo
                        '<script>
                        alert("Login Sukses sebagai Admin"); window.location = "../page/pegawai.php"
                        </script>';
                }
                else if($jabatan['jabatan_pegawai'] == 'Manajer' )
                {
                    session_start();
                    $_SESSION['isLoginManager'] = true;
                    $_SESSION['user'] = $user;
                    echo
                        '<script>
                        alert("Login Sukses sebagai Manajer"); window.location = "../page/driver.php"
                        </script>';
                }
            }else {
                echo
                    '<script>
                    alert("Email or Password Invalid Pegawai");
                    window.location = "../page/loginPage.php"
                    </script>';
            }
        }else if(mysqli_num_rows($loginDriver) != 0){
            $user = mysqli_fetch_array($loginDriver);
            if(password_verify($password, $user[6])){
                session_start();
                $_SESSION['isLoginDriver'] = true;
                $_SESSION['user'] = $user;
                echo
                    '<script>
                    alert("Login Success sebagai Driver"); window.location = "../page/dashboardPageDriver.php"
                    </script>';
            }else {
                echo
                    '<script>
                    alert("Email or Password Invalid");
                    window.location = "../page/loginPage.php"
                    </script>';
            }
        }else{
            echo
                '<script>
                alert("Email not found!"); window.location = "../page/loginPage.php"
                </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>