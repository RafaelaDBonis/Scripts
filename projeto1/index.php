<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AulaPHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body class="bg-dark text-light" >

    <div class="container text-center">

        <?php 
        include "consulta.php";

        $query = "SELECT first_name, last_name FROM actor";
        $result = mysqli_query($mysqli,$query);

        echo "
        <table class='table table-dark table-striped'>
        <thead>
        <th>Nome</th>
        <th>Sobrenome</th>
        </thead>
        </tbody>
        ";
        while($row=mysqli_fetch_row($result)){
            print("<tr><td>".$row[0]."<td><td>".$row[1]."</td></tr>");
        }

        echo"
        </tbody>
        </table>
        ";

        $mysqli -> close();
        ?>

    </div>
</body>
</html>