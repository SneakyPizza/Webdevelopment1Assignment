<html>
<head></head>
<body>
    <table>  
        <tbody><tr><td>Username</td><td>Password</td></tr></tbody>  
        <?php   
            foreach ($users as $username => $user)  
            {  
                echo '<tr><td><a href="index.php?user='.$user->username.'">'.$user->username.'</a></td><td>'.$user->password.'</td></tr>';  
            }  
        ?>  
    </table>  