<?
$subject_val = "[OMPI users] Problems with GATHERV on one process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 14:49:37 2007" -->
<!-- isoreceived="20071211194937" -->
<!-- sent="Tue, 11 Dec 2007 12:48:52 -0700" -->
<!-- isosent="20071211194852" -->
<!-- name="Moreland, Kenneth" -->
<!-- email="kmorel_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with GATHERV on one process" -->
<!-- id="7137A9E1D1768C44BE7DF11D30FAB32304852AC3_at_ES21SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Problems with GATHERV on one process<br>
<strong>From:</strong> Moreland, Kenneth (<em>kmorel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 14:48:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4642.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4640.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4643.php">Tim Mattox: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<li><strong>Reply:</strong> <a href="4643.php">Tim Mattox: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I recently ran into a problem with GATHERV while running some randomized
<br>
tests on my MPI code.  The problem seems to occur when running
<br>
MPI_Gatherv with a displacement on a communicator with a single process.
<br>
The code listed below exercises this errant behavior.  I have tried it
<br>
on OpenMPI 1.1.2 and 1.2.4.
<br>
<p>Granted, this is not a situation that one would normally run into in a
<br>
real application, but I just wanted to check to make sure I was not
<br>
doing anything wrong.
<br>
<p>-Ken
<br>
<p><p><p>#include &lt;mpi.h&gt;
<br>
<p>#include &lt;stdlib.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;MPI_Comm smallComm;
<br>
&nbsp;&nbsp;int senddata[4], recvdata[4], length, offset;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;// Split up into communicators of size 1.
<br>
&nbsp;&nbsp;MPI_Comm_split(MPI_COMM_WORLD, rank, 0, &amp;smallComm);
<br>
<p>&nbsp;&nbsp;// Now try to do a gatherv.
<br>
&nbsp;&nbsp;senddata[0] = 5; senddata[1] = 6; senddata[2] = 7; senddata[3] = 8;
<br>
&nbsp;&nbsp;recvdata[0] = 0; recvdata[1] = 0; recvdata[2] = 0; recvdata[3] = 0;
<br>
&nbsp;&nbsp;length = 3;
<br>
&nbsp;&nbsp;offset = 1;
<br>
&nbsp;&nbsp;MPI_Gatherv(senddata, length, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvdata, &amp;length, &amp;offset, MPI_INT, 0, smallComm);
<br>
&nbsp;&nbsp;if (senddata[0] != recvdata[offset])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d: %d != %d?\n&quot;, rank, senddata[0], recvdata[offset]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d: Everything OK.\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>&nbsp;&nbsp;&nbsp;****      Kenneth Moreland
<br>
&nbsp;&nbsp;&nbsp;&nbsp;***      Sandia National Laboratories
<br>
***********  
<br>
*** *** ***  email: kmorel_at_[hidden]
<br>
**  ***  **  phone: (505) 844-8919
<br>
&nbsp;&nbsp;&nbsp;&nbsp;***      fax:   (505) 845-0833
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4642.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4640.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4643.php">Tim Mattox: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<li><strong>Reply:</strong> <a href="4643.php">Tim Mattox: "Re: [OMPI users] Problems with GATHERV on one process"</a>
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
