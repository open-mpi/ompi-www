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
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/2015/02/index.php">Previous Folder, Thread view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/2015/10/index.php">Next Folder, Thread view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">3 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2007-08-23 12:36:03</em></td>
  <th>Ending:</th><td><em>2016-07-27 12:01:36</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><a href="0652.php"><strong>[MTT devel] MTT DB Archive 2011-2013</strong></a> <a name="652"><em>Josh Hursey <small>(2015-08-24 21:58:44)</small></em></a>
<li><a href="0650.php"><strong>[MTT devel] Detail link error</strong></a> <a name="650"><em>Geoffrey Paulsen <small>(2015-08-21 16:50:43)</small></em></a>
<ul>
<li><a href="0651.php"><strong>Re: [MTT devel] Detail link error</strong></a> <a name="651"><em>Josh Hursey <small>(2015-08-21 17:22:41)</small></em></a>
</ul>
</ul>
<hr>
<div class="center">
<table>
<tr><th><a name="end">Last message date: </a></th><td><em>2016-07-27 12:01:36</em></td>
<th>Archived on: </th><td><em>2016-07-27 12:01:40 EDT</em></td>
</table>
</div>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/2015/02/index.php">Previous Folder, Thread view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/2015/10/index.php">Next Folder, Thread view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/index.php">List of Folders</a></th></tr>
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
