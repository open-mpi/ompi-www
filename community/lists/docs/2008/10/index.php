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
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2008/08/index.php">Previous Folder, Thread view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2009/01/index.php">Next Folder, Thread view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">3 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2007-09-14 14:30:58</em></td>
  <th>Ending:</th><td><em>2016-03-29 09:20:51</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><a href="0125.php"><strong>[OMPI docs] openmpi(CR)_eclipse-ptp</strong></a> <a name="125"><em>Yen Phi <small>(2008-10-04 15:54:50)</small></em></a>
<li><a href="0124.php"><strong>[OMPI docs] build proxy agent for eclipse</strong></a> <a name="124"><em>Yen Phi <small>(2008-10-02 16:28:45)</small></em></a>
<ul>
<li><a href="0126.php"><strong>Re: [OMPI docs] build proxy agent for eclipse</strong></a> <a name="126"><em>Jeff Squyres <small>(2008-10-06 14:05:26)</small></em></a>
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
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2008/08/index.php">Previous Folder, Thread view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2009/01/index.php">Next Folder, Thread view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
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
