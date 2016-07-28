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
<th><a href="author.php">Author view</a></th>
</tr><tr><th colspan="2"><a href="http://www.open-mpi.org/community/lists/users/2005/02/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/users/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">4 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2005-01-11 11:35:37</em></td>
  <th>Ending:</th><td><em>2016-07-27 12:01:45</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><strong>[O-MPI users] MPI Debugging Interface</strong>
<ul><li><a href="0003.php">Rich L. Graham</a> <a name="3"><em>(2005-01-12 17:39:18)</em></a></li></ul>
<ul><li><a href="0002.php">Rich L. Graham</a> <a name="2"><em>(2005-01-12 17:34:15)</em></a></li></ul>
<ul><li><a href="0001.php">Jaroslaw Zola</a> <a name="1"><em>(2005-01-11 12:18:24)</em></a></li></ul>
<ul><li><a href="0000.php">Kathryn Mohror</a> <a name="0"><em>(2005-01-11 11:35:19)</em></a></li></ul>
</ul>
<hr>
<div class="center">
<table>
<tr><th><a name="end">Last message date: </a></th><td><em>2016-07-27 12:01:45</em></td>
<th>Archived on: </th><td><em>2016-07-27 12:02:26 EDT</em></td>
</table>
</div>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th colspan="2"><a href="http://www.open-mpi.org/community/lists/users/2005/02/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/users/index.php">List of Folders</a></th></tr>
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
