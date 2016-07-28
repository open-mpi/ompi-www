<?
$subject_val = "[OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 11:35:07 2008" -->
<!-- isoreceived="20080423153507" -->
<!-- sent="Wed, 23 Apr 2008 11:34:49 -0400" -->
<!-- isosent="20080423153449" -->
<!-- name="Alberto Giannetti" -->
<!-- email="albertogiannetti_at_[hidden]" -->
<!-- subject="[OMPI users] (no subject)" -->
<!-- id="E8EC7298-101B-45E4-B199-964BA5E14E40_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] (no subject)<br>
<strong>From:</strong> Alberto Giannetti (<em>albertogiannetti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-23 11:34:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5458.php">Torje Henriksen: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="5456.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1562.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3031.php">JiaXing Cai: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="5458.php">Torje Henriksen: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have simple MPI program that sends data to processor rank 0. The  
<br>
communication works well but when I run the program on more than 2  
<br>
processors (-np 4) the extra receivers waiting for data run on &gt; 90%  
<br>
CPU load. I understand MPI_Recv() is a blocking operation, but why  
<br>
does it consume so much CPU compared to a regular system read()?
<br>
<p><p><p>#include &lt;sys/types.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>void process_sender(int);
<br>
void process_receiver(int);
<br>
<p><p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int rank;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d (%d) initialized\n&quot;, rank, getpid());
<br>
<p>&nbsp;&nbsp;&nbsp;if( rank == 1 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;process_sender(rank);
<br>
&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;process_receiver(rank);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p><p>void process_sender(int rank)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int i, j, size;
<br>
&nbsp;&nbsp;&nbsp;float data[100];
<br>
&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d initializing data...\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;for( i = 0; i &lt; 100; ++i )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data[i] = i;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d sending data...\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Send(data, 100, MPI_FLOAT, 0, 55, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d sent data\n&quot;, rank);
<br>
}
<br>
<p><p>void process_receiver(int rank)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int count;
<br>
&nbsp;&nbsp;&nbsp;float value[200];
<br>
&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d waiting for data...\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Recv(value, 200, MPI_FLOAT, MPI_ANY_SOURCE, 55,  
<br>
MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d Got data from processor %d\n&quot;, rank,  
<br>
status.MPI_SOURCE);
<br>
&nbsp;&nbsp;&nbsp;MPI_Get_count(&amp;status, MPI_FLOAT, &amp;count);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d, Got %d elements\n&quot;, rank, count);
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5458.php">Torje Henriksen: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="5456.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1562.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3031.php">JiaXing Cai: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="5458.php">Torje Henriksen: "Re: [OMPI users] (no subject)"</a>
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
