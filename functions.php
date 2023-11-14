    <?php
    if($_GET['op']=='login')
    {
        login();
    }
    if($_GET['op']=='checklogin')
    {
        checklogin($_POST['username'],$_POST['password']);
    }
    if($_GET['op']=='logout')
    {
        logout();
    }
    function logout()
    {
        session_start();
        session_destroy();
        header("Location /");
    }
    function checklogin($username, $password){
        $staffusername  =   "Brian";
        $staffpassword  =   "123";
        
        if($username == $staffusername && $staffpassword == $password)
        {
            session_start();
            $_SESSION['username'] = $_POST['username'];

            header("Location: /MyProfile.php");
        }
        else
        { 
            header("Location: /Login account.php");
        }
    }
    function login(){
        echo $_POST['name']."<br>";
        echo $_POST['password']."<br>";
        echo date('Y-m-d H:i:s')."<br>";
    }
    ?>