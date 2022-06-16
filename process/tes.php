<?php
    if(isset($_POST['Login'])){
        include('../db.php'); 
        $email = $_POST['email'];
        $password = $_POST['password'];
    

        $queryCustomer = mysqli_query($con, "SELECT * FROM customer WHERE email_customer = '$email'") or die(mysqli_error($con));
        $queryPegawai = mysqli_query($con, "SELECT * FROM pegawai WHERE email_pegawai = '$email'") or die(mysqli_error($con));
        $queryDriver = mysqli_query($con, "SELECT * FROM driver WHERE email_driver = '$email'") or die(mysqli_error($con));
        
        if(mysqli_num_rows($queryCustomer) != 0){
            $user = mysqli_fetch_array($queryCustomer);
            if(password_verify($password, $user[6])){
                session_start();
                $_SESSION['isLoginCustomer'] = true;
                $_SESSION['user'] = $user;
                echo
                    '<script>
                    alert("Login Success"); window.location = "../page/profilCustomer.php"
                    </script>';
            }else {
                echo
                    '<script>
                    alert("Email or Password Invalid");
                    window.location = "../page/loginPage.php"
                    </script>';
            }
        }
        else if(mysqli_num_rows($queryPegawai) != 0){
            $user = mysqli_fetch_array($queryPegawai);
            if(password_verify($password, $user[7])){
                $query = mysqli_query($con, "SELECT id_role FROM pegawai WHERE email_pegawai = '$email'") or die(mysqli_error($con));
                $role = mysqli_fetch_array($query);

                if($role['id_role'] == 1)
                {
                    session_start();
                    $_SESSION['isLoginCustomerService'] = true;
                    $_SESSION['user'] = $user;
                    echo
                        '<script>
                        alert("Login Success sebagai CS"); window.location = "../page/cs.php"
                        </script>';
                }
                else if($role['id_role'] == 2)
                {
                    session_start();
                    $_SESSION['isLoginAdmin'] = true;
                    $_SESSION['user'] = $user;
                    echo
                        '<script>
                        alert("Login Success sebagai Admin"); window.location = "../page/mobil.php"
                        </script>';
                }
                else if($role['id_role'] == 3)
                {
                    session_start();
                    $_SESSION['isLoginManager'] = true;
                    $_SESSION['user'] = $user;
                    echo
                        '<script>
                        alert("Login Success sebagai Manager"); window.location = "../page/promo.php"
                        </script>';
                }
            }else {
                echo
                    '<script>
                    alert("Email or Password Invalid");
                    window.location = "../page/loginPage.php"
                    </script>';
            }
        }else if(mysqli_num_rows($queryDriver) != 0){
            $user = mysqli_fetch_array($queryDriver);
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