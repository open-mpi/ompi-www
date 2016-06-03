<?
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

<p> Open MPI's main web site and mailing lists will be down
for scheduled maintenance from 7-8:00am US Eastern time on <font color="red">
Monday,
June 6</font>, 2016.</p>

<p><font color=red>--- NOTICE -- NOTICE -- NOTICE ---</font></p>

</strong>

<hr width=50%>

</div>
<?
}
?>
