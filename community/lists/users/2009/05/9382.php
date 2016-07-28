<?
$subject_val = "Re: [OMPI users] CP2K mpi hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 09:31:24 2009" -->
<!-- isoreceived="20090519133124" -->
<!-- sent="Tue, 19 May 2009 14:32:30 +0100" -->
<!-- isosent="20090519133230" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CP2K mpi hang" -->
<!-- id="1242739950.26039.455.camel_at_localhost.localdomain" -->
<!-- inreplyto="A7459071-12C8-40D1-8997-029CCA270681_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] CP2K mpi hang<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-19 09:32:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9383.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9381.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9371.php">Noam Bernstein: "[OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9386.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9386.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2009-05-18 at 17:05 -0400, Noam Bernstein wrote:
<br>
<span class="quotelev1">&gt; The code is complicated, the input files are big and lead to long  
</span><br>
<span class="quotelev1">&gt; computation
</span><br>
<span class="quotelev1">&gt; times, so I don't think I'll be able to make a simple test case.   
</span><br>
<span class="quotelev1">&gt; Instead
</span><br>
<span class="quotelev1">&gt; I attached to the hanging processes (all 8 of them) with gdb
</span><br>
<span class="quotelev1">&gt; during  the hang. The stack trace is below.  Nodes seem to spend most of
</span><br>
<span class="quotelev1">&gt; their time in the  btl_openib_component_progress(), and occasionally in
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_progress().  I.e. not completely stuck, but not making  
</span><br>
<span class="quotelev1">&gt; progress.
</span><br>
<p>Can you confirm that *all* processes are in PMPI_Allreduce at some
<br>
point, the collectives commonly get blamed for a lot of hangs and it's
<br>
not always the correct place to look.
<br>
<p><span class="quotelev1">&gt; P.S. I get a similar hang with MVAPICH, in a nearby but different part  
</span><br>
<span class="quotelev1">&gt; of the
</span><br>
<span class="quotelev1">&gt; code (on an MPI_Bcast, specifically), increasing my tendency to believe
</span><br>
<span class="quotelev1">&gt; that it's OFED's fault.  But maybe the stack trace will suggest to  
</span><br>
<span class="quotelev1">&gt; someone
</span><br>
<span class="quotelev1">&gt; where it might be stuck, and therefore perhaps an mca flag to try?
</span><br>
<p>This strikes me as a filesystem problem more than MPI per se.  Again
<br>
with MVAPICH are all your processes in MPI_Bcast or just some of them?
<br>
<p>Ashley,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9383.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9381.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9371.php">Noam Bernstein: "[OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9386.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9386.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
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
