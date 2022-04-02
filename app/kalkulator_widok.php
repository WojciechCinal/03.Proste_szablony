<?php
include _ROOT_PATH . '/templates/header.php';
?>
<div class="content">
<section id="one" class="main style1">
    <div class="container">
        <header class="major special">
            <h2>Kalkulator</h2>
        </header>

        <section>
            <form action="<?php print(_APP_ROOT); ?>/app/kalkulator.php" method="post">
                <div class="row gtr-uniform gtr-50">
                    <div class="col-6 col-12-xsmall">
                        <label for="kwota">Kwota kredytu: </label>
                        <input id="id_kw" type="text" name="kwota" value="<?php if (isset($kwota)) print($kwota); ?>" /><br />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <label for="id_op">Oprocentowanie: </label>
                        <input id="id_op" type="text" name="oprocentowanie" value="<?php if (isset($oprocentowanie)) print($oprocentowanie); ?>" /><br />
                    </div>
                    <div class="col-12">
                        <label for="id_cz">Czas spłaty: </label>
                        <select name="czas">
                            <option value="6m">6 miesięcy</option>
                            <option value="12m">12 miesięcy</option>
                            <option value="2r">2 lata</option>
                            <option value="3r">3 lata</option>
                            <option value="5r">5 lat</option>
                            <option value="10r">10 lat</option>
                            <option value="15r">15 lat</option>
                            <option value="20r">20 lat</option>
                            <option value="25r">25 lat</option>
                        </select>
                    </div>
                    <div>
                            <button type="submit" class="primary">Oblicz</button>
                    </div>
                </div>
            </form>
        </section>
        
<div class="messages">

    <?php
    if (isset($messages)) {
        if (count($messages) > 0) {
            echo '<h4>Wystąpiły błędy: </h4>';
            echo '<ol class="err">';
            foreach ($messages as $key => $msg) {
                echo '<li>' . $msg . '</li>';
            }
            echo '</ol>';
        }
    }
    ?>


    <?php if (isset($kw_calkowita) && isset($rata)) { ?>
        <?php echo 'Kwota całkowita: ' . $kw_calkowita . ' zł'; ?></br>
        <?php echo 'Miesięczna rata wynosi: ' . number_format($rata, 2) . ' zł'; ?>
    <?php } ?>

</div>
</div>
</section>
</div>
<?php
include _ROOT_PATH . '/templates/footer.php';
?>