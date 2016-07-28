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
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2008/05/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2008/08/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">6 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2007-09-14 14:30:58</em></td>
  <th>Ending:</th><td><em>2016-03-29 09:20:51</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><strong>[OMPI docs] help me!</strong>
<ul><li><a href="0115.php">Jeff Squyres</a> <a name="115"><em>(2008-06-21 14:22:28)</em></a></li></ul>
<ul><li><a href="0114.php">Yen Phi</a> <a name="114"><em>(2008-06-21 14:16:33)</em></a></li></ul>
<li><strong>[OMPI docs] helping with documentation project</strong>
<ul><li><a href="0112.php">Amit k. Saha</a> <a name="112"><em>(2008-06-14 02:59:57)</em></a></li></ul>
<ul><li><a href="0111.php">Steven M. Berardi</a> <a name="111"><em>(2008-06-13 23:15:48)</em></a></li></ul>
<li><strong>[OMPI docs] question about ompi-checkpoint</strong>
<ul><li><a href="0116.php">Tim Mattox</a> <a name="116"><em>(2008-06-23 13:45:31)</em></a></li></ul>
<ul><li><a href="0113.php">Yen Phi</a> <a name="113"><em>(2008-06-21 10:15:47)</em></a></li></ul>
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
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2008/05/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2008/08/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
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
