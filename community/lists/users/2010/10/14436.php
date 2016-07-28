<?
$subject_val = "[OMPI users] nonblocking send/receive question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 11 14:22:19 2010" -->
<!-- isoreceived="20101011182219" -->
<!-- sent="Mon, 11 Oct 2010 13:22:14 -0500" -->
<!-- isosent="20101011182214" -->
<!-- name="Ed Peddycoart" -->
<!-- email="EPeddycoart_at_[hidden]" -->
<!-- subject="[OMPI users] nonblocking send/receive question" -->
<!-- id="C5FD53FFC7D1704890B0B1FE85A004F6037B4BCF_at_cyclone.aegis.com" -->
<!-- charset="iso-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] nonblocking send/receive question<br>
<strong>From:</strong> Ed Peddycoart (<em>EPeddycoart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-11 14:22:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14437.php">Bowen Zhou: "Re: [OMPI users] nonblocking send/receive question"</a>
<li><strong>Previous message:</strong> <a href="14435.php">Damien Hocking: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.5 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14437.php">Bowen Zhou: "Re: [OMPI users] nonblocking send/receive question"</a>
<li><strong>Reply:</strong> <a href="14437.php">Bowen Zhou: "Re: [OMPI users] nonblocking send/receive question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
I have a glut application I am trying to add MPI to.  In the display callback, for rank &gt;= 1, I want to send data to the rank =0 process.  I am not concerned at this point about sending data from the rank 0 process back to the rank &gt;= 1 process, so my data is one direction.  I would like to do this with non-blocking send/receive but I am not having much success.
<br>
&nbsp;
<br>
Within my display callback I do the following:
<br>
&nbsp;
<br>
if( myrank == 0 ) {
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Irecv( receiveData, DATA_SIZE, MPI_DOUBLE, 1, 19, MPI_COMM_WORLD, &amp;request );
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Wait( &amp;request, &amp;status );
<br>
<p>}
<br>
<p>else if( myrank == 1 ) {
<br>
<p>&nbsp;&nbsp;&nbsp;/* Post a receive, send a message, then wait */
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Send( sendData, DATA_SIZE, MPI_DOUBLE, 0, 19, MPI_COMM_WORLD );
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Wait( &amp;request, &amp;status );
<br>
<p>}
<br>
<p>But it appears that the app is still blocking after the MPI_Send.... (I have various debug prints in the actual code, this is stripped down for ease of reading).  A sample app that i have that does this works... Is doing this from the glut display call back causing the problem?  
<br>
<p>Any suggestions would be greatly appreciated.
<br>
<p>Thanks,
<br>
<p>Ed
<br>
<p>&nbsp;
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14436/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14437.php">Bowen Zhou: "Re: [OMPI users] nonblocking send/receive question"</a>
<li><strong>Previous message:</strong> <a href="14435.php">Damien Hocking: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.5 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14437.php">Bowen Zhou: "Re: [OMPI users] nonblocking send/receive question"</a>
<li><strong>Reply:</strong> <a href="14437.php">Bowen Zhou: "Re: [OMPI users] nonblocking send/receive question"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
