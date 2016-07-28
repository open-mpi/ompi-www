<?
$subject_val = "Re: [OMPI devel] Deadlock with comm_create since cid allocator change";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 08:01:46 2009" -->
<!-- isoreceived="20090921120146" -->
<!-- sent="Mon, 21 Sep 2009 07:01:39 -0500" -->
<!-- isosent="20090921120139" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Deadlock with comm_create since cid allocator change" -->
<!-- id="4AB76B23.10204_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.0909211331460.557_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Deadlock with comm_create since cid allocator change<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 08:01:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6852.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<li><strong>Previous message:</strong> <a href="6850.php">Sylvain Jeaugey: "[OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<li><strong>In reply to:</strong> <a href="6850.php">Sylvain Jeaugey: "[OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6852.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<li><strong>Reply:</strong> <a href="6852.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
what version of OpenMPI did you use? Patch #21970 should have fixed this 
<br>
issue on the trunk...
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Sylvain Jeaugey wrote:
<br>
<span class="quotelev1">&gt; Hi list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are currently experiencing deadlocks when using communicators other 
</span><br>
<span class="quotelev1">&gt; than MPI_COMM_WORLD. So we made a very simple reproducer (Comm_create 
</span><br>
<span class="quotelev1">&gt; then MPI_Barrier on the communicator - see end of e-mail).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We can reproduce the deadlock only with openib and with at least 8 cores 
</span><br>
<span class="quotelev1">&gt; (no success with sm) and after ~20 runs average. Using larger number of 
</span><br>
<span class="quotelev1">&gt; cores greatly increases the occurence of the deadlock. When the deadlock 
</span><br>
<span class="quotelev1">&gt; occurs, every even process is stuck in MPI_Finalize and every odd 
</span><br>
<span class="quotelev1">&gt; process is in MPI_Barrier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So we tracked the bug in the changesets and found out that this patch 
</span><br>
<span class="quotelev1">&gt; seem to have introduced the bug :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; user:        brbarret
</span><br>
<span class="quotelev1">&gt; date:        Tue Aug 25 15:13:31 2009 +0000
</span><br>
<span class="quotelev1">&gt; summary:     Per discussion in ticket #2009, temporarily disable the 
</span><br>
<span class="quotelev1">&gt; block CID allocation
</span><br>
<span class="quotelev1">&gt; algorithms until they properly reuse CIDs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reverting to the non multi-thread cid allocator makes the deadlock 
</span><br>
<span class="quotelev1">&gt; disappear.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to dig further and understand why this makes a difference, with 
</span><br>
<span class="quotelev1">&gt; no luck.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If anyone can figure out what's happening, that would be great ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;     int rank, numTasks;
</span><br>
<span class="quotelev1">&gt;     int range[3];
</span><br>
<span class="quotelev1">&gt;     MPI_Comm testComm, dupComm;
</span><br>
<span class="quotelev1">&gt;     MPI_Group orig_group, new_group;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;numTasks);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_group(MPI_COMM_WORLD, &amp;orig_group);
</span><br>
<span class="quotelev1">&gt;     range[0] = 0; /* first rank */
</span><br>
<span class="quotelev1">&gt;     range[1] = numTasks - 1; /* last rank */
</span><br>
<span class="quotelev1">&gt;     range[2] = 1; /* stride */
</span><br>
<span class="quotelev1">&gt;     MPI_Group_range_incl(orig_group, 1, &amp;range, &amp;new_group);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_create(MPI_COMM_WORLD, new_group, &amp;testComm);
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(testComm);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6852.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<li><strong>Previous message:</strong> <a href="6850.php">Sylvain Jeaugey: "[OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<li><strong>In reply to:</strong> <a href="6850.php">Sylvain Jeaugey: "[OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6852.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<li><strong>Reply:</strong> <a href="6852.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock with comm_create since cid allocator change"</a>
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
