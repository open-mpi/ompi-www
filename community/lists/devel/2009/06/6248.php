<?
$subject_val = "Re: [OMPI devel] Hang in collectives involving shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 16 16:10:50 2009" -->
<!-- isoreceived="20090616201050" -->
<!-- sent="Tue, 16 Jun 2009 14:10:46 -0600" -->
<!-- isosent="20090616201046" -->
<!-- name="Bryan Lally" -->
<!-- email="lally_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hang in collectives involving shared memory" -->
<!-- id="4A37FC46.1080202_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1245182143.4075.101.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Hang in collectives involving shared memory<br>
<strong>From:</strong> Bryan Lally (<em>lally_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-16 16:10:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6249.php">Jeff Squyres: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make&quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Previous message:</strong> <a href="6247.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6247.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; Do you have a stack trace of your hung application to hand, in
</span><br>
<span class="quotelev1">&gt; particular when you say &quot;All 
</span><br>
<span class="quotelev1">&gt; processes have made the same call to MPI_Allreduce.  The processes are 
</span><br>
<span class="quotelev1">&gt; all in opal_progress, called (with intervening calls) by MPI_Allreduce.&quot;
</span><br>
<span class="quotelev1">&gt; do the intervening calls include mca_coll_sync_bcast
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_barrier_intra_dec_fixed and
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_barrier_intra_recursivedoubling?
</span><br>
<p>I don't have a stack trace handy, and today is pretty full.  I'll try 
<br>
and make some time to document what I've got in the next few days.  I 
<br>
was able to hang a C translation of Ralph's reproducer as well.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Bryan
<br>
<p><pre>
-- 
Bryan Lally, lally_at_[hidden]
505.667.9954
CCS-2
Los Alamos National Laboratory
Los Alamos, New Mexico
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6249.php">Jeff Squyres: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make&quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Previous message:</strong> <a href="6247.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6247.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
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
