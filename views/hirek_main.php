<form action="<?= SITE_ROOT ?>hirek" onsubmit="return ellenoriz();" method="post">
    <div>
        <input id="hirek" type="submit" value="Küld">
        <label><input type="text" id="nev" name="cim" size="20" maxlength="40">Kérjük adja meg a nevét </label>
        <br />
        <label> <textarea id="tartalom" name="tartalom" cols="40" rows="10"></textarea> Hozzászólás: </label>
        <br />



    </div>
</form>