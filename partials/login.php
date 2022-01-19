<?php
$authentification = 0;
include '../lib/include.php';
// traitement du formulaire

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $db->quote($_POST['username']);
    $password =sha1($_POST['password']);
    $select = $db->querry("SELECT * FROM users WHERE username=$username AND password=$password");
    if ($select->rowCount() > 0){
        $_SESSION['authentification'] = $select->fetch();
        setFlash('Vous etes mantenant connecté');
        header('location:'+ WEBROOT + 'admin/index.php');
    }
}
//inclusion header
include 'header.php';
?>

<form action >
    <div class="form-group">
        <label for= "username"> Nom d'utilisateur </label>
        <?php echo input ('username'); ?>
    </div>
    <div class="form-group">
        <label for= "username">Password</label>
        <input type= "password" class="form-control "id="password" name="password">
    </div>
    <button type= "submit" class="btn btn-default"> Se connecter</button>
</form>

<?php include 'foot.php'; ?>
<?php include '../debug.php'; ?>

