<?
$subject_val = "[OMPI users] How to time data transfers?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 13 13:59:45 2010" -->
<!-- isoreceived="20101013175945" -->
<!-- sent="Wed, 13 Oct 2010 12:59:40 -0500" -->
<!-- isosent="20101013175940" -->
<!-- name="Ed Peddycoart" -->
<!-- email="EPeddycoart_at_[hidden]" -->
<!-- subject="[OMPI users] How to time data transfers?" -->
<!-- id="C5FD53FFC7D1704890B0B1FE85A004F6037B4BD2_at_cyclone.aegis.com" -->
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
<strong>Subject:</strong> [OMPI users] How to time data transfers?<br>
<strong>From:</strong> Ed Peddycoart (<em>EPeddycoart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-13 13:59:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14457.php">Eugene Loh: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>Previous message:</strong> <a href="14455.php">Bowen Zhou: "Re: [OMPI users] How to run different versions of application	in the same run?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14457.php">Eugene Loh: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>Reply:</strong> <a href="14457.php">Eugene Loh: "Re: [OMPI users] How to time data transfers?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I need to do some performance tests on my mpi app.  I simply want to determine how long it takes for my sends from one process to be received by another process.  
<br>
<p><p>Here is the code I used as my example for non-blocking send/receive...
<br>
<p>&nbsp;if( myrank == 0 ) {
<br>
&nbsp;&nbsp;/* Post a receive, send a message, then wait */
<br>
&nbsp;&nbsp;MPI_Irecv( b, 100, MPI_DOUBLE, 1, 19, MPI_COMM_WORLD, &amp;request );
<br>
&nbsp;&nbsp;MPI_Isend( a, 100, MPI_DOUBLE, 1, 17, MPI_COMM_WORLD );
<br>
&nbsp;&nbsp;MPI_Wait( &amp;request, &amp;status );
<br>
&nbsp;}
<br>
&nbsp;else if( myrank == 1 ) {
<br>
&nbsp;&nbsp;/* Post a receive, send a message, then wait */
<br>
&nbsp;&nbsp;MPI_Irecv( b, 100, MPI_DOUBLE, 0, 17, MPI_COMM_WORLD, &amp;request );   
<br>
&nbsp;&nbsp;MPI_Isend( a, 100, MPI_DOUBLE, 0, 19, MPI_COMM_WORLD );
<br>
&nbsp;&nbsp;MPI_Wait( &amp;request, &amp;status );
<br>
&nbsp;}
<br>
<p>I originally thought to just put a timer call before affer the rank=0 receive, but that doesn't seem to capture the complete time... see the following code.
<br>
<p>&nbsp;if( myrank == 0 ) {
<br>
<p>&nbsp;&nbsp;timer.start();
<br>
&nbsp;&nbsp;/* Post a receive, send a message, then wait */
<br>
&nbsp;&nbsp;MPI_Irecv( b, 100, MPI_DOUBLE, 1, 19, MPI_COMM_WORLD, &amp;request );
<br>
&nbsp;&nbsp;MPI_Isend( a, 100, MPI_DOUBLE, 1, 17, MPI_COMM_WORLD );
<br>
&nbsp;&nbsp;MPI_Wait( &amp;request, &amp;status );
<br>
&nbsp;&nbsp;timer.stop();
<br>
&nbsp;&nbsp;elapsedTime = getElapsedTime();
<br>
&nbsp;}
<br>
&nbsp;else if( myrank == 1 ) {
<br>
&nbsp;&nbsp;/* Post a receive, send a message, then wait */
<br>
&nbsp;&nbsp;MPI_Irecv( b, 100, MPI_DOUBLE, 0, 17, MPI_COMM_WORLD, &amp;request );   
<br>
&nbsp;&nbsp;MPI_Isend( a, 100, MPI_DOUBLE, 0, 19, MPI_COMM_WORLD );
<br>
&nbsp;&nbsp;MPI_Wait( &amp;request, &amp;status );
<br>
&nbsp;}
<br>
<p>How do others time this process?  Should I send a msg from one app to the other to initiate timing, send the data I want to time?
<br>
<p><p>&nbsp;if( myrank == 0 ) {
<br>
<p>&nbsp;&nbsp;MPI_Irecv( b, 100, MPI_DOUBLE, 1, startTimeTag, MPI_COMM_WORLD, &amp;request );
<br>
&nbsp;&nbsp;MPI_Wait( &amp;request, &amp;status );
<br>
&nbsp;&nbsp;timer.start();
<br>
&nbsp;&nbsp;MPI_Irecv( b, 100, MPI_DOUBLE, 1, dataTag, MPI_COMM_WORLD, &amp;request );
<br>
&nbsp;&nbsp;MPI_Wait( &amp;request, &amp;status );
<br>
&nbsp;&nbsp;timer.stop();
<br>
&nbsp;&nbsp;elapsedTime = getElapsedTime();
<br>
&nbsp;}
<br>
&nbsp;else if( myrank == 1 ) {
<br>
<p>&nbsp;&nbsp;MPI_Isend( a, 100, MPI_DOUBLE, 0, startTimerTag, MPI_COMM_WORLD );
<br>
&nbsp;&nbsp;MPI_Wait( &amp;request, &amp;status );
<br>
&nbsp;&nbsp;MPI_Isend( b, 100, MPI_DOUBLE, 0, dataTag , MPI_COMM_WORLD, &amp;request );   
<br>
&nbsp;&nbsp;MPI_Wait( &amp;request, &amp;status );
<br>
&nbsp;}
<br>
<p>Ed
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14456/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14457.php">Eugene Loh: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>Previous message:</strong> <a href="14455.php">Bowen Zhou: "Re: [OMPI users] How to run different versions of application	in the same run?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14457.php">Eugene Loh: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>Reply:</strong> <a href="14457.php">Eugene Loh: "Re: [OMPI users] How to time data transfers?"</a>
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
