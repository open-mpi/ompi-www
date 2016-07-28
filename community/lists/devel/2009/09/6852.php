<?
$subject_val = "Re: [OMPI devel] Deadlock with comm_create since cid allocator change";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 08:10:57 2009" -->
<!-- isoreceived="20090921121057" -->
<!-- sent="Mon, 21 Sep 2009 14:07:42 +0200 (CEST)" -->
<!-- isosent="20090921120742" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Deadlock with comm_create since cid allocator change" -->
<!-- id="alpine.DEB.2.00.0909211405510.557_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AB76B23.10204_at_cs.uh.edu" -->
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
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 08:07:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6853.php">Jeff Squyres: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>Previous message:</strong> <a href="6851.php">Edgar Gabriel: "Re: [OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<li><strong>In reply to:</strong> <a href="6851.php">Edgar Gabriel: "Re: [OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You were faster to fix the bug than I was to send my bug report :-)
<br>
<p>So I confirm : this fixes the problem.
<br>
<p>Thanks !
<br>
Sylvain
<br>
<p>On Mon, 21 Sep 2009, Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; what version of OpenMPI did you use? Patch #21970 should have fixed this 
</span><br>
<span class="quotelev1">&gt; issue on the trunk...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi list,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are currently experiencing deadlocks when using communicators other than 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD. So we made a very simple reproducer (Comm_create then 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Barrier on the communicator - see end of e-mail).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We can reproduce the deadlock only with openib and with at least 8 cores 
</span><br>
<span class="quotelev2">&gt;&gt; (no success with sm) and after ~20 runs average. Using larger number of 
</span><br>
<span class="quotelev2">&gt;&gt; cores greatly increases the occurence of the deadlock. When the deadlock 
</span><br>
<span class="quotelev2">&gt;&gt; occurs, every even process is stuck in MPI_Finalize and every odd process 
</span><br>
<span class="quotelev2">&gt;&gt; is in MPI_Barrier.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So we tracked the bug in the changesets and found out that this patch seem 
</span><br>
<span class="quotelev2">&gt;&gt; to have introduced the bug :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; user:        brbarret
</span><br>
<span class="quotelev2">&gt;&gt; date:        Tue Aug 25 15:13:31 2009 +0000
</span><br>
<span class="quotelev2">&gt;&gt; summary:     Per discussion in ticket #2009, temporarily disable the block 
</span><br>
<span class="quotelev2">&gt;&gt; CID allocation
</span><br>
<span class="quotelev2">&gt;&gt; algorithms until they properly reuse CIDs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Reverting to the non multi-thread cid allocator makes the deadlock 
</span><br>
<span class="quotelev2">&gt;&gt; disappear.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried to dig further and understand why this makes a difference, with no 
</span><br>
<span class="quotelev2">&gt;&gt; luck.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If anyone can figure out what's happening, that would be great ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Sylvain
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev2">&gt;&gt;     int rank, numTasks;
</span><br>
<span class="quotelev2">&gt;&gt;     int range[3];
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm testComm, dupComm;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Group orig_group, new_group;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;numTasks);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_group(MPI_COMM_WORLD, &amp;orig_group);
</span><br>
<span class="quotelev2">&gt;&gt;     range[0] = 0; /* first rank */
</span><br>
<span class="quotelev2">&gt;&gt;     range[1] = numTasks - 1; /* last rank */
</span><br>
<span class="quotelev2">&gt;&gt;     range[2] = 1; /* stride */
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Group_range_incl(orig_group, 1, &amp;range, &amp;new_group);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_create(MPI_COMM_WORLD, new_group, &amp;testComm);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Barrier(testComm);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Assistant Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6853.php">Jeff Squyres: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>Previous message:</strong> <a href="6851.php">Edgar Gabriel: "Re: [OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<li><strong>In reply to:</strong> <a href="6851.php">Edgar Gabriel: "Re: [OMPI devel] Deadlock with comm_create since cid allocator change"</a>
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
