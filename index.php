<?php
    include __DIR__ . '/layout/header.php';
?>
<main>
    <section class="login">
        <h1>Hai già un account?</h1>
        <div class="form-container">
            <form action="" method="POST">
                <div class="input">
                    <label for="email">Inserisci l'email</label>
                    <input type="mail" placeholder="name@example.com" id="email" name="email">
                </div>
                <div class="input">
                    <label for="password">Inserisci la password</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="button-container">
                    <button type="submit" name="login">ACCEDI</button>
                </div>
            </form>
            <div class="link-container">
                <p>Non hai ancora un profilo? <a href="#">Registrati</a></p>
            </div>
        </div>
    </section>
</main>
</body>
</html>