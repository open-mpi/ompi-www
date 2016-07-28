<?
$subject_val = "[OMPI users] Deadlock/NULL pointer dereference in openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 10 15:50:44 2011" -->
<!-- isoreceived="20110210205044" -->
<!-- sent="Thu, 10 Feb 2011 15:50:43 -0500 (EST)" -->
<!-- isosent="20110210205043" -->
<!-- name="Jeremiah Willcock" -->
<!-- email="jewillco_at_[hidden]" -->
<!-- subject="[OMPI users] Deadlock/NULL pointer dereference in openib BTL" -->
<!-- id="alpine.LRH.2.00.1102101547270.30558_at_flowerpot.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI users] Deadlock/NULL pointer dereference in openib BTL<br>
<strong>From:</strong> Jeremiah Willcock (<em>jewillco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-10 15:50:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15561.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15559.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15599.php">Jeff Squyres: "Re: [OMPI users] Deadlock/NULL pointer dereference in openib BTL"</a>
<li><strong>Reply:</strong> <a href="15599.php">Jeff Squyres: "Re: [OMPI users] Deadlock/NULL pointer dereference in openib BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Running the following program on two nodes connected by Infiniband and 
<br>
OMPI 1.5.1 (openib BTL), one task per node:
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
<p>int main(int argc, char** argv) {
<br>
&nbsp;&nbsp;&nbsp;int rank, size, i, *buf1, *buf2;
<br>
&nbsp;&nbsp;&nbsp;MPI_Request* reqs;
<br>
&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;buf1 = (int*)calloc(1000 * size, sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;if (!buf1) abort();
<br>
&nbsp;&nbsp;&nbsp;buf2 = (int*)calloc(1000 * size, sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;if (!buf2) abort();
<br>
&nbsp;&nbsp;&nbsp;reqs = (MPI_Request*)malloc(2 * size * sizeof(MPI_Request));
<br>
&nbsp;&nbsp;&nbsp;if (!reqs) abort();
<br>
&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; size; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(buf1 + 1000 * i, 1000, MPI_INT, (i + rank) % size, 0, 
<br>
MPI_COMM_WORLD, &amp;reqs[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(buf2 + 1000 * i, 1000, MPI_INT, (i + rank) % size, 0, 
<br>
MPI_COMM_WORLD, &amp;reqs[size + i]);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;MPI_Waitall(2 * size, reqs, MPI_STATUSES_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;free(buf1);
<br>
&nbsp;&nbsp;&nbsp;free(buf2);
<br>
&nbsp;&nbsp;&nbsp;free(reqs);
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>produces an infinite loop in MPI_Waitall.  Running under valgrind, the 
<br>
MPI_Waitall call produces a NULL pointer dereference and thus a 
<br>
segmentation fault.  The code works correctly in Open MPI 1.4.1 and in 
<br>
1.5.1 when using the TCP BTL.
<br>
<p>-- Jeremiah Willcock
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15561.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15559.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15599.php">Jeff Squyres: "Re: [OMPI users] Deadlock/NULL pointer dereference in openib BTL"</a>
<li><strong>Reply:</strong> <a href="15599.php">Jeff Squyres: "Re: [OMPI users] Deadlock/NULL pointer dereference in openib BTL"</a>
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
