<?php require 'database.php'; $id = null; if ( !empty($_GET['id'])) { $id = $_REQUEST['id']; } if ( null==$id ) { header("Location: index.php"); }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
        $pdo=Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE Contact SET firstname = ?,lastname = ?, email = ?, phone_number = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($firstname, $lastname, $email,$phone_number,$id));
        Database::disconnect();
        header("Location: index.php");
        }else {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM user where id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($id));
            $data = $q->fetch(PDO::FETCH_ASSOC);
            $firstname = $data['firstname'];
            $lastname = $data['lastname'];
            $age = $data['age'];
            $tel = $data['tel'];
            $email = $data['email'];
            Database::disconnect();
        }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ajouter</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />
    </head>
    <body>
        <br />
        <div class="container">

            <br />
            <div class="row">
                <br />
                <h3>Ajouter un contact</h3>
                <p>
            </div>
            <p>
                <br />

            <form method="post" action="add.php">
                <br />
                <div class="control-group<?php echo !empty($firstnameError)?'error':'';?>">
                    <label class="control-label">Prénom</label>

                    <br />
                    <div class="controls">
                        <input type="text" name="firstname" placeholder="prénom" value="<?php echo !empty($firstname)?$firstname:''; ?>">
                        <?php if(!empty($firstnameError)):?>
                            <span class="help-inline"><?php echo $firstnameError ;?></span>
                        <?php endif;?>
                    </div>
                    <p>
                </div>
                <p>

                    <br />
                <div class="control-group<?php echo !empty($lastnameError)?'error':'';?>">
                    <label class="control-label">Nom</label>

                    <br />
                    <div class="controls">
                        <input type="text" name="lastname" placeholder="Nom" value="<?php echo !empty($lastname)?$lastname:''; ?>">
                        <?php if(!empty($lastnameError)):?>
                            <span class="help-inline"><?php echo $lastnameError ;?></span>
                        <?php endif;?>
                    </div>
                    <p>
                </div>
                <p>

                    <br />
                <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                    <label class="control-label">Email</label>

                    <br />
                    <div class="controls">
                        <input name="email" type="text" placeholder="Email" value="<?php echo !empty($email)?$email:'';?>">
                        <?php if (!empty($emailError)): ?>
                            <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif;?>
                    </div>
                    <p>
                </div>
                <p>

                    <br />
                <div class="control-group <?php echo !empty($phone_numberError)?'error':'';?>">
                    <label class="control-label">Telephone</label>

                    <br />
                    <div class="controls">
                        <input name="phone_number" type="text" placeholder="Telephone" value="<?php echo !empty($phone_number) ? $phone_number:'';?>">
                        <?php if (!empty($phone_numberError)): ?>
                            <span class="help-inline"><?php echo $phone_numberError;?></span>
                        <?php endif;?>
                    </div>
                    <p>
                </div>
                <p>

                    <br />
                <div class="form-actions">
                    <input type="submit" class="btn btn-success" name="submit" value="submit">
                    <a class="btn" href="index.php">Retour</a>
                </div>
                <p>

            </form>
            <p>

        </div>
        <p>

    </body>
</html>
