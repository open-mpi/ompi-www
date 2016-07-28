<?
$subject_val = "Re: [OMPI devel] Hang in collectives involving shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 16 15:55:50 2009" -->
<!-- isoreceived="20090616195550" -->
<!-- sent="Tue, 16 Jun 2009 20:55:43 +0100" -->
<!-- isosent="20090616195543" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hang in collectives involving shared memory" -->
<!-- id="1245182143.4075.101.camel_at_localhost.localdomain" -->
<!-- inreplyto="4A37F4F1.6070902_at_lanl.gov" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-16 15:55:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6248.php">Bryan Lally: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6246.php">Bryan Lally: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6246.php">Bryan Lally: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6248.php">Bryan Lally: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Reply:</strong> <a href="6248.php">Bryan Lally: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-06-16 at 13:39 -0600, Bryan Lally wrote:
<br>
<span class="quotelev1">&gt; Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Whilst the fact that it appears to only happen on your machine implies
</span><br>
<span class="quotelev2">&gt; &gt; it's not a general problem with OpenMPI the fact that it happens in the
</span><br>
<span class="quotelev2">&gt; &gt; same location/rep count every time does swing the blame back the other
</span><br>
<span class="quotelev2">&gt; &gt; way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This sounds a _lot_ like the problem I was seeing, my initial message is 
</span><br>
<span class="quotelev1">&gt; appended here.  If it's the same thing, then it's not only on the big 
</span><br>
<span class="quotelev1">&gt; machines here that Ralph was talking about, but on very vanilla Fedora 7 
</span><br>
<span class="quotelev1">&gt; and 9 boxes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was able to hang Ralph's reproducer on an 8 core Dell, Fedora 9, 
</span><br>
<span class="quotelev1">&gt; kernel 2.6.27(.4-78.2.53.fc9.x86_64).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think it's just the one machine and it's configuration.
</span><br>
<p>Interesting.  In Ralphs case the hangs I've seen are where the
<br>
application calls Bcast but the MPI library calls barrier below this (it
<br>
does this every 1000 collectives apparently), it could be that any call
<br>
to Barrier at this point would hang or it could be something special
<br>
about the subverted call which is causing the problem.
<br>
<p>Do you have a stack trace of your hung application to hand, in
<br>
particular when you say &quot;All 
<br>
processes have made the same call to MPI_Allreduce.  The processes are 
<br>
all in opal_progress, called (with intervening calls) by MPI_Allreduce.&quot;
<br>
do the intervening calls include mca_coll_sync_bcast
<br>
ompi_coll_tuned_barrier_intra_dec_fixed and
<br>
ompi_coll_tuned_barrier_intra_recursivedoubling?
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6248.php">Bryan Lally: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6246.php">Bryan Lally: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6246.php">Bryan Lally: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6248.php">Bryan Lally: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Reply:</strong> <a href="6248.php">Bryan Lally: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
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
