
<?php include "./controller/passReviewController.php" ?>
$passMessage = ""
<form method="post">
    <h2>Registro de Usuario</h2>
    <div class="form__row">
        <div>
            <label for="user-name">Nombre de Usuario</label>
            <input 
            id="user-name"
            type="text"
            name="user_name"
            placeholder="Jhon Doe">
        </div>
        <div class="pass__input">
            <label for="user-pass">clave del usuario</label>
            <input 
            id="user-pass"
            type="password"
            name="user_pass">

            <?php
            if  ($passMessage != ""){ 
                ?>
            <span style="color: <?php echo $color; ?>">
            <?php echo $passMessage; ?>
            </span>

            <?php
            }
            ?>
        </div>
        

    </div>
    <button>REGISTRAR</button>

</form>