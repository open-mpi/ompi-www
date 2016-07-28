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
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2008/04/date.php">Previous Folder, Date view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2008/06/date.php">Next Folder, Date view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
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
<li><a href="0110.php"><strong>Re: [OMPI docs] communication</strong></a>&nbsp;<a name="110"><em>Ziv Mhabary</em></a>&nbsp;<em>(2008-05-21 06:25:43)</em></li>
<li><a href="0109.php"><strong>Re: [OMPI docs] OpenMPI(OMPI) Internal Document Initiative.</strong></a>&nbsp;<a name="109"><em>Jeff Squyres</em></a>&nbsp;<em>(2008-05-10 09:05:14)</em></li>
<li><a href="0108.php"><strong>[OMPI docs] OpenMPI(OMPI) Internal Document Initiative.</strong></a>&nbsp;<a name="108"><em>Mukesh K Srivastava</em></a>&nbsp;<em>(2008-05-10 00:59:09)</em></li>
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
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2008/04/date.php">Previous Folder, Date view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2008/06/date.php">Next Folder, Date view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
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
