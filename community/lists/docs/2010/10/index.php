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
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2010/07/index.php">Previous Folder, Thread view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2011/06/index.php">Next Folder, Thread view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
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
<li><a href="0147.php"><strong>[OMPI docs] please remove me from your mailing list</strong></a> <a name="147"><em>Richard Pitre <small>(2010-10-18 14:37:36)</small></em></a>
<li><a href="0144.php"><strong>[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgatherv man page</strong></a> <a name="144"><em>Jed Brown <small>(2010-10-18 11:18:13)</small></em></a>
<ul>
<li><a href="0145.php"><strong>[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page</strong></a> <a name="145"><em>Jed Brown <small>(2010-10-18 11:36:16)</small></em></a>
<ul>
<li><a href="0146.php"><strong>Re: [OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgather man page</strong></a> <a name="146"><em>Jeff Squyres <small>(2010-10-18 14:32:10)</small></em></a>
</ul>
</ul>
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
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2010/07/index.php">Previous Folder, Thread view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2011/06/index.php">Next Folder, Thread view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
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
