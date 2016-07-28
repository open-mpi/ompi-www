<?
$subject_val = "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 18:42:19 2016" -->
<!-- isoreceived="20160125234219" -->
<!-- sent="Mon, 25 Jan 2016 15:41:46 -0800" -->
<!-- isosent="20160125234146" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question" -->
<!-- id="87fuxlz0p1.fsf_at_jedbrown.org" -->
<!-- inreplyto="87y4bdetzo.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 18:41:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28373.php">Eva: "[OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<li><strong>Previous message:</strong> <a href="28371.php">Rob Latham: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>In reply to:</strong> <a href="28364.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28383.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28383.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave Love &lt;d.love_at_[hidden]&gt; writes:
<br>
<span class="quotelev1">&gt; PETSc can't be using MPI-3 because I'm in the process of fixing rpm
</span><br>
<span class="quotelev1">&gt; packaging for the current version and building it with ompi 1.6.
</span><br>
<p>It would be folly for PETSc to ship with a hard dependency on MPI-3.
<br>
You wouldn't be able to package it with ompi-1.6, for example.  But that
<br>
doesn't mean PETSc's configure can't test for MPI-3 functionality and
<br>
use it when available.  Indeed, it does (though for different capability
<br>
than mentioned in this thread).
<br>
<p><span class="quotelev1">&gt; (Exascale is only of interest if when are spins-off useful for
</span><br>
<span class="quotelev1">&gt; university-scale systems.)  I was hoping for a running example.
</span><br>
<p>The relevant example for the technique mentioned in this thread is in
<br>
src/ksp/ksp/examples/tests/benchmarkscatters of the 'master' versus
<br>
'barry/utilize-hwloc' branches.  It's completely experimental at this
<br>
time.
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28372/signature.asc">signature.asc</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28373.php">Eva: "[OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<li><strong>Previous message:</strong> <a href="28371.php">Rob Latham: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>In reply to:</strong> <a href="28364.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28383.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28383.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
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
