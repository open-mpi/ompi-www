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
<th><a href="subject.php">Subject view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2009/11/author.php">Previous Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2010/07/author.php">Next Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">2 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2007-09-14 14:30:58</em></td>
  <th>Ending:</th><td><em>2016-03-29 09:20:51</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><strong>Jeff Squyres</strong>
<ul><li><a href="0137.php">Re: [OMPI docs] Erroneous hyperlink in the FAQ</a>&nbsp;<a name="137"><em>(2010-01-28 17:07:15)</em></a></li></ul>
<li><strong>S&#233;bastien Boisvert</strong>
<ul><li><a href="0136.php">[OMPI docs] Erroneous hyperlink in the FAQ</a>&nbsp;<a name="136"><em>(2010-01-28 14:35:51)</em></a></li></ul>
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
<th><a href="subject.php">Subject view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2009/11/author.php">Previous Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2010/07/author.php">Next Folder, Author view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
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
