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
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/announce/2008/10/author.php">Previous Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/announce/2009/02/author.php">Next Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/announce/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">1 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2005-08-22 13:22:14</em></td>
  <th>Ending:</th><td><em>2016-07-27 12:01:44</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><strong>Tim Mattox</strong>
<ul><li><a href="0025.php">[Open MPI Announce] Announcing the release of Open MPI version 1.3</a>&nbsp;<a name="25"><em>(2009-01-19 16:28:18)</em></a></li></ul>
</ul>
<hr>
<div class="center">
<table>
<tr><th><a name="end">Last message date: </a></th><td><em>2016-07-27 12:01:44</em></td>
<th>Archived on: </th><td><em>2016-07-27 12:02:09 EDT</em></td>
</table>
</div>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/announce/2008/10/author.php">Previous Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/announce/2009/02/author.php">Next Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/announce/index.php">List of Folders</a></th></tr>
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
