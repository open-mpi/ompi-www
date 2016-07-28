<?
$subject_val = "Re: [OMPI users] is loop unrolling safe for MPI logic?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 17 07:50:00 2010" -->
<!-- isoreceived="20100717115000" -->
<!-- sent="Sat, 17 Jul 2010 07:50:30 -0400" -->
<!-- isosent="20100717115030" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] is loop unrolling safe for MPI logic?" -->
<!-- id="35013B6B-1DDA-4B18-A0E0-1AAFBB9B7076_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100717082257.GA50750_at_mech-cluster241.men.bris.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] is loop unrolling safe for MPI logic?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-17 07:50:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13682.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="13680.php">Jeff Squyres: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="13679.php">Anton Shterenlikht: "[OMPI users] is loop unrolling safe for MPI logic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13684.php">Anton Shterenlikht: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Reply:</strong> <a href="13684.php">Anton Shterenlikht: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Reply:</strong> <a href="13686.php">Eugene Loh: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 17, 2010, at 4:22 AM, Anton Shterenlikht wrote:
<br>
<p><span class="quotelev1">&gt; Is loop vectorisation/unrolling safe for MPI logic?
</span><br>
<span class="quotelev1">&gt; I presume it is, but are there situations where
</span><br>
<span class="quotelev1">&gt; loop vectorisation could e.g. violate the order
</span><br>
<span class="quotelev1">&gt; of execution of MPI calls?
</span><br>
<p>I *assume* that the intel compiler will not unroll loops that contain MPI function calls.  That's obviously an assumption, but I would think that unless you put some pragmas in there that tell the compiler that it's safe to unroll, the compiler will be somewhat conservative about what it automatically unrolls.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="13682.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="13680.php">Jeff Squyres: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="13679.php">Anton Shterenlikht: "[OMPI users] is loop unrolling safe for MPI logic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13684.php">Anton Shterenlikht: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Reply:</strong> <a href="13684.php">Anton Shterenlikht: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Reply:</strong> <a href="13686.php">Eugene Loh: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
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
