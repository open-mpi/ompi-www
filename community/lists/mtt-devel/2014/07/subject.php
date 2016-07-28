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
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/09/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/index.php">List of Folders</a></th></tr>
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
<li><strong>[MTT devel] [MTT svn] GIT: MTT branch master updated. 313f269f46faa4e797ef48791baac659f5cc93ea</strong>
<ul><li><a href="0647.php">Jeff Squyres (jsquyres)</a> <a name="647"><em>(2014-07-21 11:48:34)</em></a></li></ul>
<li><strong>[MTT devel] collecting OpenMPI info when the AlreadyInstalled module is used</strong>
<ul><li><a href="0646.php">Jeff Squyres (jsquyres)</a> <a name="646"><em>(2014-07-10 13:38:24)</em></a></li></ul>
<ul><li><a href="0645.php">Gilles Gouaillardet</a> <a name="645"><em>(2014-07-09 06:26:53)</em></a></li></ul>
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
<th><a href="index.php">Thread view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/09/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-devel/index.php">List of Folders</a></th></tr>
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
