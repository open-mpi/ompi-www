<?
$subject_val = "Re: [OMPI users] ABI stabilization/versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 30 08:04:38 2010" -->
<!-- isoreceived="20100130130438" -->
<!-- sent="Sat, 30 Jan 2010 08:04:33 -0500" -->
<!-- isosent="20100130130433" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ABI stabilization/versioning" -->
<!-- id="E30B56E3-860E-4957-8754-7ACD429BE20E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="877hr5qe6m.fsf_at_59A2.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] ABI stabilization/versioning<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-30 08:04:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11949.php">Tim: "[OMPI users] Test OpenMPI on a cluster"</a>
<li><strong>Previous message:</strong> <a href="11947.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<li><strong>In reply to:</strong> <a href="11890.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11866.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 26, 2010, at 6:49 AM, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; And inspecting a binary built in Sep 2008 (must have been 1.2.7), ldd
</span><br>
<span class="quotelev1">&gt; resolves to my 1.4.1 copy without complaints.  However, the loader is
</span><br>
<span class="quotelev1">&gt; intelligent and at least offers a warning when I try to run this ancient
</span><br>
<span class="quotelev1">&gt; binary
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   ./a.out: Symbol `ompi_mpi_comm_null' has different size in shared object, consider re-linking
</span><br>
<p>Yes, this was definitely a problem.  We introduced ABI forward compatibility in 1.3.2 that fixes this issue.
<br>
<p>Background: even though Open MPI's MPI handles are just pointers, there's a subtlety that we didn't anticipate that makes the back-end size of the actual structs matter for global handles like MPI_COMM_WORLD.  In 1.3.2, we ended up padding the size of back-end MPI objects for pre-defined handles (like MPI_COMM_WORLD, MPI_INT, ...etc.) to help isolate us from future struct size changes.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11949.php">Tim: "[OMPI users] Test OpenMPI on a cluster"</a>
<li><strong>Previous message:</strong> <a href="11947.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<li><strong>In reply to:</strong> <a href="11890.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11866.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
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
