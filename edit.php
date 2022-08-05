<?php require('database.php'); //on appelle notre fichier de config
    $id = null;
    if (!empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }

    if (null == $id) {
        header("location:index.php");
    } else { //on lance la connection et la requete
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM Contact where id =?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.min.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />
    </head>

    <body>

    <br />
    <div class="container">

        <br />
        <div class="span10 offset1">
            <br />
            <div class="row">

                <br />
                <h3>Editer</h3>
                <p>
            </div>
            <p>

            <br />
            <div class="form-horizontal" >
                <br />
                <div class="control-group">
                    <label class="control-label">Prénom</label>

                    <br />
                    <div class="controls">
                        <label class="checkbox">
                            <?php echo $data['firstname']; ?>
                        </label>
                    </div>
                    <p>
                </div>
                <p>

                <br />
                <div class="control-group">
                    <label class="control-label">Nom</label>
                    <br />
                    <div class="controls">
                        <label class="checkbox">
                            <?php echo $data['lastname']; ?>
                        </label>
                    </div>
                    <p>
                </div>
                <p>

                <br />
                <div class="control-group">
                    <label class="control-label">Email</label>
                    <br />
                    <div class="controls">
                        <label class="checkbox">
                            <?php echo $data['email']; ?>
                        </label>
                    </div>
                    <p>
                </div>
                <p>

                <br />
                <div class="control-group">
                    <label class="control-label">Téléphone</label>

                    <br />
                    <div class="controls">
                        <label class="checkbox">
                            <?php echo $data['phone_number']; ?>
                        </label>
                    </div>
                    <p>
                </div>
                <p>

                <br />
                <div class="form-actions">
                    <a class="btn" href="index.php">Back</a>
                </div>
                <p>
            </div>
            <p>
        </div>
        <p>
    </div>
    <p>
        <!-- /container -->
    </body>
</html>
