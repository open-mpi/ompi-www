<?
$subject_val = "[OMPI users] Bad behavior in Allgatherv when a count is 0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 18:58:50 2007" -->
<!-- isoreceived="20071213235850" -->
<!-- sent="Thu, 13 Dec 2007 16:58:34 -0700" -->
<!-- isosent="20071213235834" -->
<!-- name="Moreland, Kenneth" -->
<!-- email="kmorel_at_[hidden]" -->
<!-- subject="[OMPI users] Bad behavior in Allgatherv when a count is 0" -->
<!-- id="7137A9E1D1768C44BE7DF11D30FAB323048C7DB3_at_ES21SNLNT.srn.sandia.gov" -->
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
<strong>Subject:</strong> [OMPI users] Bad behavior in Allgatherv when a count is 0<br>
<strong>From:</strong> Moreland, Kenneth (<em>kmorel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-13 18:58:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4672.php">Qiang Xu: "[OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361"</a>
<li><strong>Previous message:</strong> <a href="4670.php">Brian W. Barrett: "Re: [OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4976.php">George Bosilca: "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4976.php">George Bosilca: "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have found that on rare occasion Allgatherv fails to pass the data to
<br>
all processes.  Given some magical combination of receive counts and
<br>
displacements, one or more processes are missing some or all of some
<br>
arrays in their receive buffer.  A necessary, but not sufficient,
<br>
condition seems to be that one of the receive counts is 0.  Beyond that
<br>
I have not figured out any real pattern, but the example program listed
<br>
below demonstrates the failure.  I have tried it on OpenMPI version
<br>
1.2.3 and 1.2.4; it fails on both.  However, it works fine with version
<br>
1.1.2, so the problem must have been introduced since then.
<br>
<p>-Ken
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
&nbsp;&nbsp;int size;
<br>
&nbsp;&nbsp;MPI_Comm smallComm;
<br>
&nbsp;&nbsp;int senddata[5], recvdata[100];
<br>
&nbsp;&nbsp;int lengths[3], offsets[3];
<br>
&nbsp;&nbsp;int i, j;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;if (size != 3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Need 3 processes.&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD, 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;for (i = 0; i &lt; 100; i++) recvdata[i] = -1;
<br>
&nbsp;&nbsp;for (i = 0; i &lt; 5; i++) senddata[i] = rank*10 + i;
<br>
&nbsp;&nbsp;lengths[0] = 5;  lengths[1] = 0;  lengths[2] = 5;
<br>
&nbsp;&nbsp;offsets[0] = 3;  offsets[1] = 9;  offsets[2] = 10;
<br>
&nbsp;&nbsp;MPI_Allgatherv(senddata, lengths[rank], MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvdata, lengths, offsets, MPI_INT, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;for (i = 0; i &lt; size; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (j = 0; j &lt; lengths[i]; j++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (recvdata[offsets[i]+j] != 10*i+j)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d: Got bad data from rank %d, index %d: %d\n&quot;, rank, i,
<br>
j,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvdata[offsets[i]+j]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4672.php">Qiang Xu: "[OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361"</a>
<li><strong>Previous message:</strong> <a href="4670.php">Brian W. Barrett: "Re: [OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4976.php">George Bosilca: "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4976.php">George Bosilca: "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
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
