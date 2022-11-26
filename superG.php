<DOCTYPE html>
    <html>
        <body>
            <h1>Using $_POST to collect data using HTML form</h1>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
              Name: <input type="text" name="fname">
              Email: <input type="email" name="email">
              <input type="submit">
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                //collect value of input field
                $name = $_POST['fname'];
                $email =htmlspecialchars($_REQUEST['email']);
                if (empty($name)) {
                    echo "Name is empty";
                  } else {
                    echo $name;
                    
                }"<br>";
                 
                if (empty($email)) {
                    echo "Email is empty";
                  } else {
                    echo $email;
                  }
                }
            ?>

        </body>
    </html>
