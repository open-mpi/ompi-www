<?
$subject_val = "[OMPI users] recv hangs up when iptables is enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  9 07:02:25 2012" -->
<!-- isoreceived="20120809110225" -->
<!-- sent="Thu, 09 Aug 2012 19:02:44 +0800" -->
<!-- isosent="20120809110244" -->
<!-- name="jiakai" -->
<!-- email="jia.kai66_at_[hidden]" -->
<!-- subject="[OMPI users] recv hangs up when iptables is enabled" -->
<!-- id="502398D4.3070205_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] recv hangs up when iptables is enabled<br>
<strong>From:</strong> jiakai (<em>jia.kai66_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-09 07:02:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19916.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Previous message:</strong> <a href="19914.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I encountered a strange problem: when running across nodes, the first
<br>
send/recv pairs work, but the second recv blocks indefinitely.
<br>
<p>After some google, I found this:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2012/02/18383.php">http://www.open-mpi.org/community/lists/users/2012/02/18383.php</a>
<br>
<p>I use my laptop as a wireless router, and I NAT all traffic from wlan0
<br>
to eth0 using iptables. After clearing all rules in iptables, the
<br>
problem gets solved.
<br>
<p>Has anyone also had the same problem? Do you have any idea what causes this?
<br>
thx:)
<br>
<p>Test program:
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const int MASTER = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const int TAG_GENERAL = 1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int numTasks;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int source;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int dest;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int count;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int dataWaitingFlag;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;char inMsg;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char outMsg;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status Stat;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// Initialize the MPI stack and pass 'argc' and 'argv' to each slave
<br>
node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// Gets number of tasks/processes that this program is running on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;numTasks);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// Gets the rank (process/task number) that this program is running on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// If the master node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (rank == MASTER) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Ssend out messages to all the sub-processes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (dest = 1; dest &lt; numTasks; dest++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;outMsg = rand() % 256;    // Generate random message to send
<br>
to slave nodes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Ssend a message to the destination   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; 5; i ++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Ssend(&amp;outMsg, 1, MPI_CHAR, dest, TAG_GENERAL +
<br>
i, MPI_COMM_WORLD);           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Task %d: Sent message %d to task %d with tag %d\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank, outMsg, dest, TAG_GENERAL + i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// Else a slave node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else  {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Wait until a message is there to be received   
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Get the message and put it in 'inMsg'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; 5; i ++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Recv(&amp;inMsg, 1, MPI_CHAR, MASTER, TAG_GENERAL + i,
<br>
MPI_COMM_WORLD, &amp;Stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Get how big the message is and put it in 'count'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Get_count(&amp;Stat, MPI_CHAR, &amp;count);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Task %d: Received %d char(s) (%d) from task %d with
<br>
tag %d \n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank, count, inMsg, Stat.MPI_SOURCE, Stat.MPI_TAG);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p><p><p><p><pre>
-- 
??
???????? ?14?
Kai Jia
Dept. of Computer Science &amp; Technology
Tsinghua University
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19915/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19915/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19916.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Previous message:</strong> <a href="19914.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<!-- nextthread="start" -->
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
