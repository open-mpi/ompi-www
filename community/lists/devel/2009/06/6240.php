<?
$subject_val = "Re: [OMPI devel] Hang in collectives involving shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 15 14:29:45 2009" -->
<!-- isoreceived="20090615182945" -->
<!-- sent="Mon, 15 Jun 2009 19:29:37 +0100" -->
<!-- isosent="20090615182937" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hang in collectives involving shared memory" -->
<!-- id="1245090577.5220.524.camel_at_localhost.localdomain" -->
<!-- inreplyto="71d2d8cc0906100807j7c4b75dek946b48493af95fdb_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-06-15 14:29:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6241.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="6239.php">Eugene Loh: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6211.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6246.php">Bryan Lally: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Reply:</strong> <a href="6246.php">Bryan Lally: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2009-06-10 at 09:07 -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi Ashley
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks! I would definitely be interested and will look at the tool.
</span><br>
<span class="quotelev1">&gt; Meantime, I have filed a bunch of data on this in ticket #1944, so
</span><br>
<span class="quotelev1">&gt; perhaps you might take a glance at that and offer some thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1944">https://svn.open-mpi.org/trac/ompi/ticket/1944</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will be back after I look at the tool.
</span><br>
<p>Have you made any progress?
<br>
<p>Whilst the fact that it appears to only happen on your machine implies
<br>
it's not a general problem with OpenMPI the fact that it happens in the
<br>
same location/rep count every time does swing the blame back the other
<br>
way.  Perhaps it's some special configure or runtime option you are
<br>
setting?  One thing that springs to mind is the numa-maps could be
<br>
exposing some timimg problem with shared memory calls however this
<br>
doesn't sit well with it always failing on the same iteration.
<br>
<p>Can you provide stack traces from when it's hung and crucially are they
<br>
the same for every hang?  If you change the coll_sync_barrier_before
<br>
value to make it hang on a different repetition does this change the
<br>
stack trace at all?
<br>
<p>Likewise when you have applied the collectives patch is the collective
<br>
state the same for every hang and how does this differ when you change
<br>
the coll_sync_barrier_before variable?
<br>
<p>It would be useful to see stack traces and collective state from the
<br>
three collectives you report as causing problems, MPI_Bcast, MPI_Reduce
<br>
and MPI_Allgather because as I said before these three collectives have
<br>
radically different communication patterns.
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
<li><strong>Next message:</strong> <a href="6241.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="6239.php">Eugene Loh: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6211.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6246.php">Bryan Lally: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Reply:</strong> <a href="6246.php">Bryan Lally: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
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
