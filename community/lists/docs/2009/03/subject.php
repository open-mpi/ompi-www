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
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2009/01/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2009/11/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">5 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2007-09-14 14:30:58</em></td>
  <th>Ending:</th><td><em>2016-03-29 09:20:51</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><strong>[OMPI docs] Open-Pal Documentation</strong>
<ul><li><a href="0131.php">Jeff Squyres</a> <a name="131"><em>(2009-03-03 15:50:32)</em></a></li></ul>
<ul><li><a href="0130.php">jody</a> <a name="130"><em>(2009-03-03 15:44:52)</em></a></li></ul>
<ul><li><a href="0129.php">navimarin</a> <a name="129"><em>(2009-03-03 15:37:30)</em></a></li></ul>
<li><strong>[OMPI docs] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)</strong>
<ul><li><a href="0133.php">Alessandro Surace</a> <a name="133"><em>(2009-03-26 11:01:34)</em></a></li></ul>
<ul><li><a href="0132.php">Alessandro Surace</a> <a name="132"><em>(2009-03-26 10:11:00)</em></a></li></ul>
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
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2009/01/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2009/11/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
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
