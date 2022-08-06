<?php require 'database.php';
    $id=0;
    if(!empty($_GET['id'])){
        $id=$_REQUEST['id'];
    }

    if(!empty($_POST)) {
        $id = $_POST['id'];
        $pdo = PdoDatabase::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM Contact  WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        PdoDatabase::disconnect();
        header("Location: index.php");
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
                    <h3>Supprimer un contact</h3>
                    <p>

                </div>
                <p>

                    <br />
                <form class="form-horizontal" action="delete.php" method="delete">
                    <input type="hidden" name="id" value="<?php echo $id;?>"/>

                    Vous êtes sûr de supprimer ce contact ?

                    <br />
                    <div class="form-actions">
                        <button type="submit" class="btn btn-danger">Oui</button>
                        <a class="btn" href="index.php">Non</a>
                    </div>
                    <p>

                </form>
                <p>
            </div>
            <p>


        </div>
        <p>
            <!-- /container -->
    </body>
</html>
