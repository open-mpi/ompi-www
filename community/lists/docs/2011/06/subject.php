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
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2010/10/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2011/10/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">4 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2007-09-14 14:30:58</em></td>
  <th>Ending:</th><td><em>2016-03-29 09:20:51</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><strong>[OMPI docs] Error in man pages (MPI_IGNORE_STATUSES)</strong>
<ul><li><a href="0151.php">Jeff Squyres</a> <a name="151"><em>(2011-06-25 06:46:37)</em></a></li></ul>
<ul><li><a href="0150.php">Zbigniew Koza</a> <a name="150"><em>(2011-06-20 06:56:52)</em></a></li></ul>
<li><strong>[OMPI docs] openmpi query</strong>
<ul><li><a href="0149.php">Jeff Squyres</a> <a name="149"><em>(2011-06-16 14:45:42)</em></a></li></ul>
<ul><li><a href="0148.php">SHEETAL MALU</a> <a name="148"><em>(2011-06-15 03:31:37)</em></a></li></ul>
</ul>
<hr>
<div class="center">
<table>
<tr><th><a name="end">Last message date: </a></th><td><em>2016-03-29 09:20:51</em></td>
<th>Archived on: </th><td><em>2016-03-29 09:20:53 EDT</em></td>
</table>
</div>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2010/10/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2011/10/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
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
