<?
# Required as of PHP 5.1 -- see 
# http://us2.php.net/manual/en/function.mktime.php
if (function_exists("date_default_timezone_set")) {
    date_default_timezone_set('America/Indiana/Indianapolis');
}

# Display this notice until 11:30am US Eastern time, Tuesday, Jan 21, 2014
if (time() < mktime(11, 30, 0, 1, 21, 2014)) {
?>
<div align=center>

<strong>

<p><font color=red>--- NOTICE -- NOTICE -- NOTICE ---</font></p>

<p> Open MPI's main web site and mailing lists will be down
for scheduled maintenance from 11-11:30am US Eastern time on <font color="red">
Tuesday,
January 21</font>, 2014.</p>

<p><font color=red>--- NOTICE -- NOTICE -- NOTICE ---</font></p>

</strong>

<hr width=50%>

</div>
<?
}
?>
