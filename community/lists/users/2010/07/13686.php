<?
$subject_val = "Re: [OMPI users] is loop unrolling safe for MPI logic?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 17 12:12:00 2010" -->
<!-- isoreceived="20100717161200" -->
<!-- sent="Sat, 17 Jul 2010 09:14:11 -0700" -->
<!-- isosent="20100717161411" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] is loop unrolling safe for MPI logic?" -->
<!-- id="4C41D6D3.1060809_at_oracle.com" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-17 12:14:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13687.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13685.php">Jeff Squyres: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="13681.php">Jeff Squyres: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13692.php">Anton Shterenlikht: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Reply:</strong> <a href="13692.php">Anton Shterenlikht: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;On Jul 17, 2010, at 4:22 AM, Anton Shterenlikht wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Is loop vectorisation/unrolling safe for MPI logic?
</span><br>
<span class="quotelev2">&gt;&gt;I presume it is, but are there situations where
</span><br>
<span class="quotelev2">&gt;&gt;loop vectorisation could e.g. violate the order
</span><br>
<span class="quotelev2">&gt;&gt;of execution of MPI calls?
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;I *assume* that the intel compiler will not unroll loops that contain MPI function calls.  That's obviously an assumption, but I would think that unless you put some pragmas in there that tell the compiler that it's safe to unroll, the compiler will be somewhat conservative about what it automatically unrolls.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
More generally, a Fortran compiler that optimizes aggressively could 
<br>
&quot;break&quot; MPI code.
<br>
<p><a href="http://www.mpi-forum.org/docs/mpi-20-html/node236.htm#Node241">http://www.mpi-forum.org/docs/mpi-20-html/node236.htm#Node241</a>
<br>
<p>That said, you may not need to worry about this in your particular case.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13687.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13685.php">Jeff Squyres: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="13681.php">Jeff Squyres: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13692.php">Anton Shterenlikht: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Reply:</strong> <a href="13692.php">Anton Shterenlikht: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
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
