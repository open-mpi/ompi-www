<?
$subject_val = "Re: [OMPI users] Deadlock/NULL pointer dereference in openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 13:05:39 2011" -->
<!-- isoreceived="20110214180539" -->
<!-- sent="Mon, 14 Feb 2011 13:05:35 -0500" -->
<!-- isosent="20110214180535" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock/NULL pointer dereference in openib BTL" -->
<!-- id="6A1D1A4E-BBEC-4147-A61B-F32F322E8BBE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.00.1102101547270.30558_at_flowerpot.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadlock/NULL pointer dereference in openib BTL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 13:05:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15600.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="15598.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15560.php">Jeremiah Willcock: "[OMPI users] Deadlock/NULL pointer dereference in openib BTL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeremiah; I've filed the following ticket about this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2722">https://svn.open-mpi.org/trac/ompi/ticket/2722</a>
<br>
<p><p><p>On Feb 10, 2011, at 3:50 PM, Jeremiah Willcock wrote:
<br>
<p><span class="quotelev1">&gt; Running the following program on two nodes connected by Infiniband and OMPI 1.5.1 (openib BTL), one task per node:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt;  int rank, size, i, *buf1, *buf2;
</span><br>
<span class="quotelev1">&gt;  MPI_Request* reqs;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;  buf1 = (int*)calloc(1000 * size, sizeof(int));
</span><br>
<span class="quotelev1">&gt;  if (!buf1) abort();
</span><br>
<span class="quotelev1">&gt;  buf2 = (int*)calloc(1000 * size, sizeof(int));
</span><br>
<span class="quotelev1">&gt;  if (!buf2) abort();
</span><br>
<span class="quotelev1">&gt;  reqs = (MPI_Request*)malloc(2 * size * sizeof(MPI_Request));
</span><br>
<span class="quotelev1">&gt;  if (!reqs) abort();
</span><br>
<span class="quotelev1">&gt;  for (i = 0; i &lt; size; ++i) {
</span><br>
<span class="quotelev1">&gt;    MPI_Isend(buf1 + 1000 * i, 1000, MPI_INT, (i + rank) % size, 0, MPI_COMM_WORLD, &amp;reqs[i]);
</span><br>
<span class="quotelev1">&gt;    MPI_Irecv(buf2 + 1000 * i, 1000, MPI_INT, (i + rank) % size, 0, MPI_COMM_WORLD, &amp;reqs[size + i]);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  MPI_Waitall(2 * size, reqs, MPI_STATUSES_IGNORE);
</span><br>
<span class="quotelev1">&gt;  free(buf1);
</span><br>
<span class="quotelev1">&gt;  free(buf2);
</span><br>
<span class="quotelev1">&gt;  free(reqs);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; produces an infinite loop in MPI_Waitall.  Running under valgrind, the MPI_Waitall call produces a NULL pointer dereference and thus a segmentation fault.  The code works correctly in Open MPI 1.4.1 and in 1.5.1 when using the TCP BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Jeremiah Willcock
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15600.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="15598.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15560.php">Jeremiah Willcock: "[OMPI users] Deadlock/NULL pointer dereference in openib BTL"</a>
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
