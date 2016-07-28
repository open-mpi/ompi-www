<?
$subject_val = "Re: [OMPI users] is loop unrolling safe for MPI logic?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 18 03:09:33 2010" -->
<!-- isoreceived="20100718070933" -->
<!-- sent="Sun, 18 Jul 2010 08:09:28 +0100" -->
<!-- isosent="20100718070928" -->
<!-- name="Anton Shterenlikht" -->
<!-- email="mexas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] is loop unrolling safe for MPI logic?" -->
<!-- id="20100718070928.GC59122_at_mech-cluster241.men.bris.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C41D6D3.1060809_at_oracle.com" -->
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
<strong>Date:</strong> 2010-07-18 03:09:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13693.php">Bibrak Qamar: "[OMPI users] MPICH2 is working OpenMPI Not"</a>
<li><strong>Previous message:</strong> <a href="13691.php">Gustavo Correa: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
<li><strong>In reply to:</strong> <a href="13686.php">Eugene Loh: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13695.php">Tim Prince: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Reply:</strong> <a href="13695.php">Tim Prince: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Jul 17, 2010 at 09:14:11AM -0700, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;On Jul 17, 2010, at 4:22 AM, Anton Shterenlikht wrote:
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Is loop vectorisation/unrolling safe for MPI logic?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I presume it is, but are there situations where
</span><br>
<span class="quotelev3">&gt; &gt;&gt;loop vectorisation could e.g. violate the order
</span><br>
<span class="quotelev3">&gt; &gt;&gt;of execution of MPI calls?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;I *assume* that the intel compiler will not unroll loops that contain MPI function calls.  That's obviously an assumption, but I would think that unless you put some pragmas in there that tell the compiler that it's safe to unroll, the compiler will be somewhat conservative about what it automatically unrolls.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; More generally, a Fortran compiler that optimizes aggressively could 
</span><br>
<span class="quotelev1">&gt; &quot;break&quot; MPI code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mpi-forum.org/docs/mpi-20-html/node236.htm#Node241">http://www.mpi-forum.org/docs/mpi-20-html/node236.htm#Node241</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That said, you may not need to worry about this in your particular case.
</span><br>
<p>This is a very important point, many thanks Eugene.
<br>
Fortran MPI programmer definitely needs to pay attention to this.
<br>
<p>MPI-2.2 provides a slightly updated version of this guide:
<br>
<p><a href="http://www.mpi-forum.org/docs/mpi22-report/node343.htm#Node348">http://www.mpi-forum.org/docs/mpi22-report/node343.htm#Node348</a>
<br>
<p>many thanks
<br>
anton
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="13693.php">Bibrak Qamar: "[OMPI users] MPICH2 is working OpenMPI Not"</a>
<li><strong>Previous message:</strong> <a href="13691.php">Gustavo Correa: "Re: [OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
<li><strong>In reply to:</strong> <a href="13686.php">Eugene Loh: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13695.php">Tim Prince: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Reply:</strong> <a href="13695.php">Tim Prince: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
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
