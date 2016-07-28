<?
$subject_val = "[OMPI users] Selecting different processors during function";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 19 11:37:14 2011" -->
<!-- isoreceived="20110219163714" -->
<!-- sent="Sat, 19 Feb 2011 14:37:09 -0200" -->
<!-- isosent="20110219163709" -->
<!-- name="Alexandre Barrozo" -->
<!-- email="barrozo.ah_at_[hidden]" -->
<!-- subject="[OMPI users] Selecting different processors during function" -->
<!-- id="AANLkTinR=PvF3tp8gR9rFhb7LjiRE05Rx4nJfBFooOVq_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Selecting different processors during function<br>
<strong>From:</strong> Alexandre Barrozo (<em>barrozo.ah_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-19 11:37:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15664.php">Ralph Castain: "Re: [OMPI users] Selecting different processors during function"</a>
<li><strong>Previous message:</strong> <a href="15662.php">Shamis, Pavel: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15664.php">Ralph Castain: "Re: [OMPI users] Selecting different processors during function"</a>
<li><strong>Reply:</strong> <a href="15664.php">Ralph Castain: "Re: [OMPI users] Selecting different processors during function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
<br>
<p>I'm trying to write a routine that, if a certain condition is met, it
<br>
transfers a specific string from processor A to processor B. However, during
<br>
this transfer, I have to access the  processor B within the same function
<br>
(the function was accessed on A, but I need to go to B to put the
<br>
transferred string on it's right place). The problem is that I have no idea
<br>
how to change between processors while using one of them. Here's a sample of
<br>
the code:
<br>
<p>for ( int j = 0; j &lt; atom-&gt;nlocal; j++ )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( rank != atom-&gt;tag[j] ) //condition for transfer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest = atom-&gt;tag[j];       //the one who needs to deliver to
<br>
receive
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atom-&gt;tag[j] = rank;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend( noisez[j], noisesize, MPI_DOUBLE, rank, 0, world,
<br>
&amp;request);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>/*  I know this doesn't work, but it's just to get the idea of what I'm
<br>
trying to do  */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if( rank == dest ) //trying to access the destination processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for ( int n = 0; n &lt; atom-&gt;nlocal; n++ )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( n =! atomtag[n] )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv( noisez[n], noisesize, MPI_DOUBLE, flag2, 0,
<br>
world, &amp;request);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;request,&amp;stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for ( int m = n; m &lt; atom-&gt;nlocal; m++ )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atomtag[m] = m;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if ( n == atom-&gt;nlocal -1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv( noisez[atom-&gt;nlocal], noisesize, MPI_DOUBLE,
<br>
flag2, 0, world, &amp;request);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;request,&amp;stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Is there any function to call another processor while using one of them?
<br>
<p>Regards,
<br>
<p>Alexandre
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15663/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15664.php">Ralph Castain: "Re: [OMPI users] Selecting different processors during function"</a>
<li><strong>Previous message:</strong> <a href="15662.php">Shamis, Pavel: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15664.php">Ralph Castain: "Re: [OMPI users] Selecting different processors during function"</a>
<li><strong>Reply:</strong> <a href="15664.php">Ralph Castain: "Re: [OMPI users] Selecting different processors during function"</a>
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
