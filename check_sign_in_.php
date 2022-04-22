<?php
    session_start();
    if(isset($_SESSION["login"]) && !empty($_SESSION["email"]) && !empty($_SESSION["password"]))
        {
            if(empty($_SESSION["email_tourist"]))
            $_SESSION["email_tourist"] = '';

            if(empty($_SESSION["password_tourist"]))
            $_SESSION["password_tourist"] = '';

            if(empty($_SESSION["email_tour_guide"]))
            $_SESSION["email_tour_guide"] = '';

            if(empty($_SESSION["password_tour_guide"]))
            $_SESSION["password_tour_guide"] = '';

            if($_SESSION["email"]==$_SESSION["email_tourist"] && $_SESSION["password"]==$_SESSION["password_tourist"])
                {
                }
            elseif($_SESSION["email"]==$_SESSION["email_tour_guide"] && $_SESSION["password"]==$_SESSION["password_tour_guide"])
                {
                }
        }
    else
        {
            session_unset();
            echo '
                    <center>
                        <div class="alert alert-danger" role="alert">
                            <b> ERROR ! </b>
                        </div>
                    </center>
            ';
            // header("refresh:2;url= index.php");
            // exit;
        }
?>