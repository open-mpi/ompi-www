<?
$subject_val = "Re: [OMPI users] is loop unrolling safe for MPI logic?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 17 08:17:43 2010" -->
<!-- isoreceived="20100717121743" -->
<!-- sent="Sat, 17 Jul 2010 13:17:37 +0100" -->
<!-- isosent="20100717121737" -->
<!-- name="Anton Shterenlikht" -->
<!-- email="mexas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] is loop unrolling safe for MPI logic?" -->
<!-- id="20100717121737.GB51417_at_mech-cluster241.men.bris.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="35013B6B-1DDA-4B18-A0E0-1AAFBB9B7076_at_cisco.com" -->
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
<strong>From:</strong> Anton Shterenlikht (<em>mexas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-17 08:17:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13685.php">Jeff Squyres: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="13683.php">David Zhang: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="13681.php">Jeff Squyres: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13686.php">Eugene Loh: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Jul 17, 2010 at 07:50:30AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 17, 2010, at 4:22 AM, Anton Shterenlikht wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is loop vectorisation/unrolling safe for MPI logic?
</span><br>
<span class="quotelev2">&gt; &gt; I presume it is, but are there situations where
</span><br>
<span class="quotelev2">&gt; &gt; loop vectorisation could e.g. violate the order
</span><br>
<span class="quotelev2">&gt; &gt; of execution of MPI calls?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I *assume* that the intel compiler will not unroll loops
</span><br>
<span class="quotelev1">&gt; that contain MPI function calls.  That's obviously an
</span><br>
<span class="quotelev1">&gt; assumption, but I would think that unless you put some
</span><br>
<span class="quotelev1">&gt; pragmas in there that tell the compiler that it's safe
</span><br>
<span class="quotelev1">&gt; to unroll, the compiler will be somewhat conservative
</span><br>
<span class="quotelev1">&gt; about what it automatically unrolls.
</span><br>
<p>% mpif90 ./p-grains1.f90
<br>
./p-grains1.f90(123): (col. 1) remark: LOOP WAS VECTORIZED.
<br>
./p-grains1.f90(250): (col. 35) remark: LOOP WAS VECTORIZED.
<br>
<p>Looking at the source code:
<br>
<p>&nbsp;&nbsp;&nbsp;123  sub_domain=0
<br>
<p>&nbsp;&nbsp;&nbsp;250  write(*,*)count(sub_domain .ne. 0)
<br>
<p>where sub_domain is an array.
<br>
&nbsp;
<br>
So, it seems the compiler vectorised only implicit whole
<br>
array operations.
<br>
<p>Jeff, many thanks again
<br>
<p>anton
<br>
<p><p><pre>
-- 
Anton Shterenlikht
Room 2.6, Queen's Building
Mech Eng Dept
Bristol University
University Walk, Bristol BS8 1TR, UK
Tel: +44 (0)117 331 5944
Fax: +44 (0)117 929 4423
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13685.php">Jeff Squyres: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="13683.php">David Zhang: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="13681.php">Jeff Squyres: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13686.php">Eugene Loh: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
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
