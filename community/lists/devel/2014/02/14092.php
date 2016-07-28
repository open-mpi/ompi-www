<?
$subject_val = "Re: [OMPI devel] Reviewing MPI_Dims_create";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 11 00:17:17 2014" -->
<!-- isoreceived="20140211051717" -->
<!-- sent="Tue, 11 Feb 2014 06:17:56 +0100" -->
<!-- isosent="20140211051756" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Reviewing MPI_Dims_create" -->
<!-- id="20140211051756.GA14867_at_neuromancer.fritz.box" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5FEF66DD-3C52-42A8-BA2F-49076FEDCA9C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Reviewing MPI_Dims_create<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-11 00:17:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14093.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14091.php">Paul Hargrove: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>In reply to:</strong> <a href="14072.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14079.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 19:12 Mon 10 Feb     , Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; 1. Should we cache generated prime numbers?  (if so, it'll have to be done in a thread-safe way)
</span><br>
<p>The code I've submitted in the other thread is much faster than the
<br>
original code (e.g. 100x faster for 10000 nodes, the ratio increases
<br>
with the number of nodes). Given that MPI_Dims_create is a function
<br>
typically called once at application startup, I don't think caching
<br>
was of great benefit.
<br>
<p><span class="quotelev1">&gt; 2. Should we just generate prime numbers and hard-code them into a table that is compiled into the code?  We would only need primes up to the sqrt of 2billion (i.e., signed int), right?  I don't know how many that is -- if it's small enough, perhaps this is the easiest solution.
</span><br>
<p>Could be done, but it's not much faster than the current code. Plus
<br>
it's just calling for bugs (MPICH does this and their (initial) code
<br>
easily segfaulted).
<br>
<p>Best
<br>
-Andreas
<br>
<p><p><pre>
-- 
==========================================================
Andreas Sch&#228;fer
HPC and Grid Computing
Chair of Computer Science 3
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
+49 9131 85-27910
PGP/GPG key via keyserver
<a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
==========================================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14092/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14093.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14091.php">Paul Hargrove: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>In reply to:</strong> <a href="14072.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14079.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
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
