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
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/07/date.php">Previous Folder, Date view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/2015/02/date.php">Next Folder, Date view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">1 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2007-08-23 12:36:03</em></td>
  <th>Ending:</th><td><em>2016-07-27 12:01:36</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><a href="0648.php"><strong>[MTT devel] Migrating Trac wiki and tickets to Github</strong></a>&nbsp;<a name="648"><em>Jeff Squyres (jsquyres)</em></a>&nbsp;<em>(2014-09-02 09:56:07)</em></li>
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
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/07/date.php">Previous Folder, Date view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/2015/02/date.php">Next Folder, Date view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/index.php">List of Folders</a></th></tr>
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
