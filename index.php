<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
        include("./data.php");

    ?>

<table class="table table-danger">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">nom</th>
        <th scope="col">age</th>
        <th scope="col">action</th>
       
        </tr>
    </thead>

    <tbody>

    <?php foreach( $users as $user ):?>

        <tr>
                <th scope="row"><?= $user["id"] ?></th>
                <td><?= $user["nom"] ?></td>
                <td><?= $user["age"] ?></td>
                <td>

                <a type="button"  href="" class="btn btn-success">modifier</a>
                <a type="button" href="./deleteUser.php?id=<?= $user["id"] ?>" class="btn btn-danger">supprimer</a>
                </td>
        </tr>

    <?php endforeach?>



    </tbody>

</table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>