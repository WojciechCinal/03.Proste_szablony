<?php
include _ROOT_PATH . '/templates/header.php';
?>
<h3>Prosty kalkulator</h2>

<form class="pure-form pure-form-stacked" action="<?php print(_APP_ROOT); ?>/app/kalkulator.php" method="post">
    <fieldset>
        <label for="kwota">Kwota kredytu: </label>
        <input id="id_kw" type="text" name="kwota" value="<?php if (isset($kwota)) print($kwota); ?>" /><br />
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
        </select><br />
        <label for="id_op">Oprocentowanie (w %): </label>
        <input id="id_op" type="text" name="oprocentowanie" value="<?php if (isset($oprocentowanie)) print($oprocentowanie); ?>" /><br />
    </fieldset>
    <button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>

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

<?php
include _ROOT_PATH . '/templates/footer.php';
?>