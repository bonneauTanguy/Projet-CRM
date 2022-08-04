<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Projet CRM</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />


</head>
<body>

<br />
<div class="container">

    <br />
    <div class="row">

        <br />
        <h2>ProjetCRM</h2>
        <p>

    </div>
    <p>

    <br />
    <div class="row">

        <a href="add.php" class="btn btn-success">Ajouter un contact</a>

        <br />
        <div class="table-responsive">

            <br />
            <table class="table table-hover table-bordered">

                <br />
                <thead>

                    <th>Nom</th>
                    <p>

                    <th>prénom</th>
                    <p>

                    <th>email</th>
                    <p>

                    <th>Téléphone</th>
                    <p>

                </thead>
                <p>
                    <br />
                    <tbody>
                        <?php include 'database.php'; //connection a la BDD
                            echo '<br /> <tr>';
                            echo'<td>' . $row['firstname'] . '</td> <p>';
                            echo'<td>' . $row['lastname'] . '</td> <p>';
                            echo'<td>' . $row['email'] . '</td> <p>';
                            echo'<td>' . $row['phone_number'] . '</td> <p>';
                            echo '<td>';
                            echo '<a class="btn" href="edit.php?id=' . $row['id'] . '">Read</a>';
                            echo '</td> <p>';
                            echo '<td>';
                            echo '<a class="btn btn-success" href="update.php?id=' . $row['id'] . '">Update</a>';
                            echo '</td> <p>';
                            echo'<td>';
                            echo '<a class="btn btn-danger" href="delete.php?id=' . $row['id'] . ' ">Delete</a>';
                            echo '</td><p>';
                            echo '</tr><p>';
                            Database::disconnect(); //on se deconnecte de la BDD;
                        ?>
                    </tbody>
                <p>

            </table>
            <p>

        </div>
        <p>

    </div>
    <p>

</div>
<p>

</body>
</html>