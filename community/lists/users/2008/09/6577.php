<?
$subject_val = "[OMPI users] Odd MPI_Bcast behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 10:35:32 2008" -->
<!-- isoreceived="20080917143532" -->
<!-- sent="Wed, 17 Sep 2008 10:34:09 -0400" -->
<!-- isosent="20080917143409" -->
<!-- name="Gregory D Abram" -->
<!-- email="gabra_at_[hidden]" -->
<!-- subject="[OMPI users] Odd MPI_Bcast behavior" -->
<!-- id="OF6A8C071E.BF875778-ON852574C7.004F0EFA-852574C7.005007F5_at_us.ibm.com" -->
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
<strong>Subject:</strong> [OMPI users] Odd MPI_Bcast behavior<br>
<strong>From:</strong> Gregory D Abram (<em>gabra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 10:34:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6578.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>Previous message:</strong> <a href="6576.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6581.php">Jeff Squyres: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<li><strong>Reply:</strong> <a href="6581.php">Jeff Squyres: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<li><strong>Reply:</strong> <a href="6584.php">Eugene Loh: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a little program which initializes, calls MPI_Bcast, prints a
<br>
message, waits five seconds, and finalized.  I sure thought that each
<br>
participating process would print the message immediately, then all would
<br>
wait and exit - thats what happens with mvapich 1.0.0.  On OpenMPI 1.2.5,
<br>
though, I get the message immediately from proc 0, then 5 seconds later,
<br>
from proc 1, and then 5 seconds later, it exits- as if MPI_Finalize on proc
<br>
0 flushed the MPI_Bcast.  If I add a MPI_Barrier after the MPI_Bcast, it
<br>
works as I'd expect.  Is this behavior correct?  If so, I so I have a bunch
<br>
of code to change in order to work correctly on OpenMPI.
<br>
<p>Greg
<br>
<p>Here's the code:
<br>
<p>#include &lt;stdlib.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char hostname[256]; int r, s;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;gethostname(hostname, sizeof(hostname));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;r);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;s);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;%d of %d: %s\n&quot;, r, s, hostname);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int i = 99999;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;i, sizeof(i), MPI_UNSIGNED_CHAR, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;%d: got it\n&quot;, r);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;sleep(5);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6577/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6578.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>Previous message:</strong> <a href="6576.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6581.php">Jeff Squyres: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<li><strong>Reply:</strong> <a href="6581.php">Jeff Squyres: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<li><strong>Reply:</strong> <a href="6584.php">Eugene Loh: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
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
