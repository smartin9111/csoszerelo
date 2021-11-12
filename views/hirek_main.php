<form action="<?= SITE_ROOT ?>hirek" onsubmit="return ellenoriz();" method="post">
    <div>
        <label><input type="text" id="nev" name="cim" size="20" maxlength="40">Név (minimum 5 karakter): </label>
        <br />
        <label> <textarea id="tartalom" name="tartalom" cols="40" rows="10"></textarea> Tartalom (kötelező): </label>
        <br />
        <input id="kuld" type="submit" value="Küld">
        <button onclick="ellenoriz();" type="button">Ellenőriz</button>
    </div>
</form>