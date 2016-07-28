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
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2014/08/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2014/10/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">3 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2006-02-11 10:54:01</em></td>
  <th>Ending:</th><td><em>2016-07-27 12:01:36</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><strong>[MTT users] MTT Account Request</strong>
<ul><li><a href="0818.php">Jeff Squyres (jsquyres)</a> <a name="818"><em>(2014-09-08 16:26:35)</em></a></li></ul>
<ul><li><a href="0817.php">Chrien, Natalie E</a> <a name="817"><em>(2014-09-08 13:35:54)</em></a></li></ul>
<li><strong>[MTT users] MTT on PPC64</strong>
<ul><li><a href="0819.php">Jeff Squyres (jsquyres)</a> <a name="819"><em>(2014-09-18 10:20:23)</em></a></li></ul>
</ul>
<hr>
<div class="center">
<table>
<tr><th><a name="end">Last message date: </a></th><td><em>2016-07-27 12:01:36</em></td>
<th>Archived on: </th><td><em>2016-07-27 12:01:41 EDT</em></td>
</table>
</div>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2014/08/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2014/10/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/index.php">List of Folders</a></th></tr>
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
