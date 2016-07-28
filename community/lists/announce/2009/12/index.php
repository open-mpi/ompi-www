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
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/announce/2009/11/index.php">Previous Folder, Thread view</a></th><th><a href="http://www.open-mpi.org/community/lists/announce/2010/01/index.php">Next Folder, Thread view</a></th><th><a href="http://www.open-mpi.org/community/lists/announce/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">3 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2005-08-22 13:22:14</em></td>
  <th>Ending:</th><td><em>2016-07-27 12:01:44</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><a href="0035.php"><strong>[Open MPI Announce] Open MPI v1.4 released</strong></a> <a name="35"><em>Jeff Squyres <small>(2009-12-08 17:36:23)</small></em></a>
<li><a href="0034.php"><strong>[Open MPI Announce] New subproject: Open Resilient Cluster Manager</strong></a> <a name="34"><em>Ralph Castain <small>(2009-12-05 10:52:03)</small></em></a>
<li><a href="0033.php"><strong>[Open MPI Announce] Open MPI v1.3.4 released</strong></a> <a name="33"><em>Jeff Squyres <small>(2009-12-01 13:17:09)</small></em></a>
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
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/announce/2009/11/index.php">Previous Folder, Thread view</a></th><th><a href="http://www.open-mpi.org/community/lists/announce/2010/01/index.php">Next Folder, Thread view</a></th><th><a href="http://www.open-mpi.org/community/lists/announce/index.php">List of Folders</a></th></tr>
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
