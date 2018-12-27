<?php
# Required as of PHP 5.1 -- see
# http://us2.php.net/manual/en/function.mktime.php
if (function_exists("date_default_timezone_set")) {
    date_default_timezone_set('America/Indiana/Indianapolis');
}

# Display this notice until 8:00am US Eastern time, Monday, Jun 6, 2016
if (time() < mktime(8, 0, 0, 6, 6, 2016)) {
?>
<div align=center>

<strong>

<p><font color=red>--- NOTICE -- NOTICE -- NOTICE ---</font></p>

<p>Open MPI's mailing lists have experiencing intermittent problems since approximately Thursday, August 23, 2018.  Many mails sent to the list have not yet been delivered.  <a href="https://github.com/open-mpi/ompi/issues/5583">There is a problem with our listserver provider</a>; we're working with them to get the issue resolved.</p>

<p>If you sent a mail to any of our lists and it did not go through (i.e., it did not show up in the mail-archive.com archives), you should probably just wait.  Your mail <em>may</em> get delivered within a day or so once the listserve comes back.  If your mail is still not delivered to the list after a day after the listserver returns, you might as well re-send it.</p>

<p>Sorry for the hassle!</p>

<p><font color=red>--- NOTICE -- NOTICE -- NOTICE ---</font></p>

</strong>

<hr width=50%>

</div>
<?php
}
?>
