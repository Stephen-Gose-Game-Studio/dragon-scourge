<?php

$template = <<<END
<form action="users.php?do=charnew" method="post" enctype="multipart/form-data"> 
<table>
<tr><td width="30%">Character Name:</td><td><input type="text" name="charname" size="30" maxlength="30" /><br />Character names must be 30 characters or less.<br /><br /><br /></td></tr>
<tr><td width="30%">Avatar:</td><td>Upload an avatar:<br /><input type="file" name="intavatar" /><br />Avatars must be 50x50 pixels & {{maxsize}}kb or smaller.<br />JPG, GIF, and PNG file types only.<br /><br /><br /></td></tr>
<tr><td width="30%">Character Class:</td><td><select name="charclass">{{charclass}}</select></td></tr>
<tr><td width="30%">Difficulty:</td><td><select name="difficulty">{{difficulty}}</select></td></tr>
<tr><td width="30%">Default Character:</td><td><input type="checkbox" name="setdefault" value="yes" checked="checked" {{defaultenabled}} style="vertical-align: middle;" /> Yes.<br />Place a check in the box if you want your new character to become the current default for your account.<br /><br /></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="Submit" /> <input type="reset" name="reset" value="Reset" /></td></tr>
</table>
</form>
You may also continue playing <a href="index.php">the game</a> or return to the main <a href="users.php?do=characters">Characters</a> screen.
END;

?>