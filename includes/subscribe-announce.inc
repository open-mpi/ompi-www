<form action="<?php print($topdir); ?>/subscribe-announce.php" method=post>
<div align=center>
<p>Enter your e-mail address to be notified when new
releases of <?php print($project); ?> are released<br />
<input type="email" placeholder="Your email address" name=email size=30>
<input type="hidden" name="prev_describe" value="<?php print($prev_describe); ?>">
<input type="hidden" name="prev_url" value="<?php print($_SERVER['SCRIPT_NAME']); ?>">
<input type="hidden" name="project" value="<?php print($project); ?>">
<input type="hidden" name="list_name" value="<?php print($list_name); ?>">
<input type="submit" value="&nbsp;&raquo;&nbsp;"><br />

Your email address will be used only to send you announcements about
new releases of <?php print($project); ?> and you will be able to
un-subscribe at any time.  

</div>
</form>
