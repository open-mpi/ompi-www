<? 
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER["REQUEST_URI"])) {
    include("../../include/index-header.inc");
} else {
    include("include/index-header.inc");
}
?>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2008/05/author.php">Previous Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2008/07/author.php">Next Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">3 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2006-02-11 10:54:01</em></td>
  <th>Ending:</th><td><em>2016-07-27 12:01:36</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><strong>Ethan Mallove</strong>
<ul><li><a href="0587.php">Re: [MTT users] Help</a>&nbsp;<a name="587"><em>(2008-06-10 13:16:07)</em></a></li></ul>
<li><strong>Phuong Nguyen</strong>
<ul><li><a href="0586.php">[MTT users] Help</a>&nbsp;<a name="586"><em>(2008-06-10 10:05:39)</em></a></li></ul>
<li><strong>Tim Mattox</strong>
<ul><li><a href="0588.php">[MTT users] Brief mail services outage today</a>&nbsp;<a name="588"><em>(2008-06-12 12:31:39)</em></a></li></ul>
</ul>
<hr>
<div class="center">
<table>
<tr><th><a name="end">Last message date: </a></th><td><em>2016-07-27 12:01:36</em></td>
<th>Archived on: </th><td><em>2016-07-27 12:01:41 EDT</em></td>
</table>
</div>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2008/05/author.php">Previous Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2008/07/author.php">Next Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/index.php">List of Folders</a></th></tr>
</table>
</div>
<!-- trailer="footer" -->
<? 
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER{'REQUEST_URI'})) {
    include("../../include/index-footer.inc");
} else {
    include("include/index-footer.inc");
}
?>
