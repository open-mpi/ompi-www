<?
$subject_val = "[OMPI users] TCP instead of openIB doesn't work";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 10:00:38 2009" -->
<!-- isoreceived="20090227150038" -->
<!-- sent="Fri, 27 Feb 2009 16:00:32 +0100" -->
<!-- isosent="20090227150032" -->
<!-- name="Vittorio Giovara" -->
<!-- email="vitto.giova_at_[hidden]" -->
<!-- subject="[OMPI users] TCP instead of openIB doesn't work" -->
<!-- id="4de51c660902270700u24438df9p5b9cc65da90d0598_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] TCP instead of openIB doesn't work<br>
<strong>From:</strong> Vittorio Giovara (<em>vitto.giova_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-27 10:00:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8242.php">Ralph Castain: "Re: [OMPI users] TCP instead of openIB doesn't work"</a>
<li><strong>Previous message:</strong> <a href="8240.php">Vittorio Giovara: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8242.php">Ralph Castain: "Re: [OMPI users] TCP instead of openIB doesn't work"</a>
<li><strong>Reply:</strong> <a href="8242.php">Ralph Castain: "Re: [OMPI users] TCP instead of openIB doesn't work"</a>
<li><strong>Reply:</strong> <a href="8255.php">Vittorio Giovara: "Re: [OMPI users] TCP instead of openIB doesn't work"</a>
<li><strong>Reply:</strong> <a href="8257.php">Jeff Squyres: "Re: [OMPI users] TCP instead of openIB doesn't work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, i'm posting here another problem of my installation
<br>
I wanted to benchmark the differences between tcp and openib transport
<br>
<p>if i run a simple non mpi application i get
<br>
randori ~ # mpirun  --mca btl tcp,self  -np 2 -host randori -host tatami
<br>
hostname
<br>
randori
<br>
tatami
<br>
<p>but as soon as i switch to my benchmark program i have
<br>
mpirun  --mca btl tcp,self  -np 2 -host randori -host tatami graph
<br>
Master thread reporting
<br>
matrix size 33554432 kB, time is in [us]
<br>
<p>and instead of starting the send/receive functions it just hangs there; i
<br>
also checked the transmitted packets with wireshark but after the handshake
<br>
no more packets are exchanged
<br>
<p>I read in the archives that there were some problems in this area and so i
<br>
tried what was suggested in previous emails
<br>
<p>mpirun --mca btl ^openib  -np 2 -host randori -host tatami graph
<br>
mpirun --mca pml ob1  --mca btl tcp,self  -np 2 -host randori -host tatami
<br>
graph
<br>
<p>gives exactly the same output as before (no mpisend/receive)
<br>
while the next commands gives something more interesting
<br>
<p>mpirun --mca pml cm  --mca btl tcp,self  -np 2 -host randori -host tatami
<br>
graph
<br>
--------------------------------------------------------------------------
<br>
No available pml components were found!
<br>
<p>This means that there are no components of this type installed on your
<br>
system or all the components reported that they could not be used.
<br>
<p>This is a fatal error; your MPI process is likely to abort.  Check the
<br>
output of the &quot;ompi_info&quot; command and ensure that components of this
<br>
type are available on your system.  You may also wish to check the
<br>
value of the &quot;component_path&quot; MCA parameter and ensure that it has at
<br>
least one directory that contains valid MCA components.
<br>
<p>--------------------------------------------------------------------------
<br>
[tatami:06619] PML cm cannot be selected
<br>
mpirun noticed that job rank 0 with PID 6710 on node randori exited on
<br>
signal 15 (Terminated).
<br>
<p>which is not possible as if i do ompi_info --param all there is the CM pml
<br>
component
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.8)
<br>
<p><p>my test program is quite simple, just a couple of MPI_Send and MPI_Recv
<br>
(just after the signature)
<br>
do you have any ideas that might help me?
<br>
thanks a lot
<br>
Vittorio
<br>
<p>========================
<br>
#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;math.h&gt;
<br>
<p>#define M_COL 4096
<br>
#define M_ROW 524288
<br>
#define NUM_MSG 25
<br>
<p>unsigned long int  gigamatrix[M_ROW][M_COL];
<br>
<p>int main (int argc, char *argv[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int numtasks, rank, dest, source, rc, tmp, count, tag=1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned long int  exp, exchanged;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned long int i, j, e;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned long matsize;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status Stat;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct timeval timing_start, timing_end;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double inittime = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;long int totaltime = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init (&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size (MPI_COMM_WORLD, &amp;numtasks);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf (stderr, &quot;Master thread reporting\n&quot;, numtasks - 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matsize = (long) M_COL * M_ROW / 64;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf (stderr, &quot;matrix size %d kB, time is in [us]\n&quot;, matsize);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;source = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest = 1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*warm up phase*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Send (&amp;tmp, 1, MPI_INT, dest, tag, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Recv (&amp;tmp, 1, MPI_INT, source, tag, MPI_COMM_WORLD,
<br>
&amp;Stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Send (&amp;tmp, 1, MPI_INT, dest, tag, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Send (&amp;tmp, 1, MPI_INT, dest, tag, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Recv (&amp;tmp, 1, MPI_INT, source, tag, MPI_COMM_WORLD,
<br>
&amp;Stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Send (&amp;tmp, 1, MPI_INT, dest, tag, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (e = 0; e &lt; NUM_MSG; e++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exp = pow (2, e);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exchanged = 64 * exp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*timing of ops*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gettimeofday (&amp;timing_start, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Send (&amp;gigamatrix[0], exchanged, MPI_UNSIGNED_LONG,
<br>
dest, tag, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Recv (&amp;gigamatrix[0], exchanged, MPI_UNSIGNED_LONG,
<br>
source, tag, MPI_COMM_WORLD, &amp;Stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gettimeofday (&amp;timing_end, NULL);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;totaltime = (timing_end.tv_sec - timing_start.tv_sec) * 1000000
<br>
+ (timing_end.tv_usec - timing_start.tv_usec);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memset (&amp;timing_start, 0, sizeof(struct timeval));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memset (&amp;timing_end, 0, sizeof(struct timeval));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf (stdout, &quot;%d kB\t%d\n&quot;, exp, totaltime);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;task complete\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank &gt;= 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;source = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Recv (&amp;tmp, 1, MPI_INT, source, tag, MPI_COMM_WORLD,
<br>
&amp;Stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Send (&amp;tmp, 1, MPI_INT, dest, tag, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Recv (&amp;tmp, 1, MPI_INT, source, tag, MPI_COMM_WORLD,
<br>
&amp;Stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Recv (&amp;tmp, 1, MPI_INT, source, tag, MPI_COMM_WORLD,
<br>
&amp;Stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Send (&amp;tmp, 1, MPI_INT, dest, tag, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Recv (&amp;tmp, 1, MPI_INT, source, tag, MPI_COMM_WORLD,
<br>
&amp;Stat);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (e = 0; e &lt; NUM_MSG; e++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exp = pow (2, e);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exchanged = 64 * exp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Recv (&amp;gigamatrix[0], (unsigned)  exchanged,
<br>
MPI_UNSIGNED_LONG, source, tag, MPI_COMM_WORLD, &amp;Stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Send (&amp;gigamatrix[0], (unsigned)  exchanged,
<br>
MPI_UNSIGNED_LONG, dest, tag, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize ();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8241/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8242.php">Ralph Castain: "Re: [OMPI users] TCP instead of openIB doesn't work"</a>
<li><strong>Previous message:</strong> <a href="8240.php">Vittorio Giovara: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8242.php">Ralph Castain: "Re: [OMPI users] TCP instead of openIB doesn't work"</a>
<li><strong>Reply:</strong> <a href="8242.php">Ralph Castain: "Re: [OMPI users] TCP instead of openIB doesn't work"</a>
<li><strong>Reply:</strong> <a href="8255.php">Vittorio Giovara: "Re: [OMPI users] TCP instead of openIB doesn't work"</a>
<li><strong>Reply:</strong> <a href="8257.php">Jeff Squyres: "Re: [OMPI users] TCP instead of openIB doesn't work"</a>
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
