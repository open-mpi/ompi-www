<?
$subject_val = "Re: [OMPI users] is loop unrolling safe for MPI logic?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 19 02:15:40 2010" -->
<!-- isoreceived="20100719061540" -->
<!-- sent="Mon, 19 Jul 2010 08:15:32 +0200" -->
<!-- isosent="20100719061532" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] is loop unrolling safe for MPI logic?" -->
<!-- id="4C43ED84.7010509_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100718070928.GC59122_at_mech-cluster241.men.bris.ac.uk" -->
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
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-19 02:15:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13696.php">Stefan Kuhne: "[OMPI users] MPE logging GUI"</a>
<li><strong>Previous message:</strong> <a href="13694.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="13692.php">Anton Shterenlikht: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/18/2010 9:09 AM, Anton Shterenlikht wrote:
<br>
<span class="quotelev1">&gt; On Sat, Jul 17, 2010 at 09:14:11AM -0700, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 17, 2010, at 4:22 AM, Anton Shterenlikht wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is loop vectorisation/unrolling safe for MPI logic?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I presume it is, but are there situations where
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; loop vectorisation could e.g. violate the order
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of execution of MPI calls?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I *assume* that the intel compiler will not unroll loops that contain MPI function calls.  That's obviously an assumption, but I would think that unless you put some pragmas in there that tell the compiler that it's safe to unroll, the compiler will be somewhat conservative about what it automatically unrolls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; More generally, a Fortran compiler that optimizes aggressively could
</span><br>
<span class="quotelev2">&gt;&gt; &quot;break&quot; MPI code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.mpi-forum.org/docs/mpi-20-html/node236.htm#Node241">http://www.mpi-forum.org/docs/mpi-20-html/node236.htm#Node241</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That said, you may not need to worry about this in your particular case.
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; This is a very important point, many thanks Eugene.
</span><br>
<span class="quotelev1">&gt; Fortran MPI programmer definitely needs to pay attention to this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI-2.2 provides a slightly updated version of this guide:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mpi-forum.org/docs/mpi22-report/node343.htm#Node348">http://www.mpi-forum.org/docs/mpi22-report/node343.htm#Node348</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; many thanks
</span><br>
<span class="quotelev1">&gt; anton
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
&nbsp;From the point of view of the compiler developers, auto-vectorization 
<br>
and unrolling are distinct questions.  An MPI or other non-inlined 
<br>
function call would not be subject to vectorization.  While 
<br>
auto-vectorization or unrolling may expose latent bugs, MPI is not 
<br>
particularly likely to make them worse.  You have made some misleading 
<br>
statements about vectorization along the way, but these aren't likely to 
<br>
relate to MPI problems.
<br>
Upon my return, I will be working on a case which was developed and 
<br>
tested succeessfully under ifort 10.1 and other compilers, which is 
<br>
failing under current ifort versions.  Current Intel MPI throws a run 
<br>
time error indicating that the receive buffer has been lost; the openmpi 
<br>
failure is more obscure.  I will have to change the code to use distinct 
<br>
tags for each MPI send/receive pair in order to track it down.  I'm not 
<br>
counting on that magically making the bug go away.  ifort is not 
<br>
particularly aggressive about unrolling loops which contain MPI calls, 
<br>
but I agree that must be considered.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13696.php">Stefan Kuhne: "[OMPI users] MPE logging GUI"</a>
<li><strong>Previous message:</strong> <a href="13694.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="13692.php">Anton Shterenlikht: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
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
