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
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2015/01/date.php">Previous Folder, Date view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2016/03/date.php">Next Folder, Date view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
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
<li><a href="0217.php"><strong>Re: [OMPI docs] Small note about MPI_Buffer_detach</strong></a>&nbsp;<a name="217"><em>Jeff Squyres (jsquyres)</em></a>&nbsp;<em>(2015-02-21 09:54:58)</em></li>
<li><a href="0216.php"><strong>Re: [OMPI docs] MPI_Ibarrier missing request argument</strong></a>&nbsp;<a name="216"><em>Jeff Squyres (jsquyres)</em></a>&nbsp;<em>(2015-02-21 09:50:11)</em></li>
<li><a href="0215.php"><strong>[OMPI docs] MPI_Ibarrier missing request argument</strong></a>&nbsp;<a name="215"><em>Maximilian</em></a>&nbsp;<em>(2015-02-20 11:33:48)</em></li>
<li><a href="0214.php"><strong>[OMPI docs] Small note about MPI_Buffer_detach</strong></a>&nbsp;<a name="214"><em>Maximilian</em></a>&nbsp;<em>(2015-02-20 09:00:38)</em></li>
</ul>
<hr>
<div class="center">
<table>
<tr><th><a name="end">Last message date: </a></th><td><em>2016-03-29 09:20:51</em></td>
<th>Archived on: </th><td><em>2016-03-29 09:20:52 EDT</em></td>
</table>
</div>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/docs/2015/01/date.php">Previous Folder, Date view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/2016/03/date.php">Next Folder, Date view</a></th><th><a href="http://www.open-mpi.org/community/lists/docs/index.php">List of Folders</a></th></tr>
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
