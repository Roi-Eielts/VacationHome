<div class="container">
    <?php

    if (isset($_POST['subm'])) {

        $username = $_POST["naam"];
        $password = $_POST["wachtwoord"];

        $login_sql = "select wachtwoord from inlog where username = '$username';";
        if ($result = $conn -> query($login_sql)) {
            if ($result -> num_rows == 1) {
                $row = $result -> fetch_assoc();
                if (password_verify($password, $row["wachtwoord"])) {
                    include("admin/de_pannel.php");
                } else {
                    echo "oops iets ging er mis";
                }
            } else {
                echo "oops iets ging er mis";
            }
        }
    } else {
        ?>
        <form action="" method="POST">
            <table>
                <tr>
                    <th>
                        <h1>naam/username</h1>
                    <input type="text" name="naam" required> 
                    </th>
                </tr>
                <tr>
                    <td>
                    <h1>wachtwoord</h1>
                    <input type="password" name="wachtwoord" required> 
                    </td>
                </tr>
                <tr>
                    <td><button name="subm">verstuur</button></td>
                </tr>
            </table>
        </form>
        <?php
    }
    ?>
</div>