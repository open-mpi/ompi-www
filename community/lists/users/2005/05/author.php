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
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/users/2005/04/author.php">Previous Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/users/2005/06/author.php">Next Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/users/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">2 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2005-01-11 11:35:37</em></td>
  <th>Ending:</th><td><em>2016-07-27 12:01:45</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><strong>atarpley</strong>
<ul><li><a href="0051.php">[O-MPI users] Questions about Open MPI</a>&nbsp;<a name="51"><em>(2005-05-05 06:58:19)</em></a></li></ul>
<li><strong>George Bosilca</strong>
<ul><li><a href="0052.php">Re: [O-MPI users] Questions about Open MPI</a>&nbsp;<a name="52"><em>(2005-05-05 11:43:38)</em></a></li></ul>
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
<th><a href="subject.php">Subject view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/users/2005/04/author.php">Previous Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/users/2005/06/author.php">Next Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/users/index.php">List of Folders</a></th></tr>
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
