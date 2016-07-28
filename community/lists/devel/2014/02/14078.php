<?
$subject_val = "Re: [OMPI devel] Speedup for MPI_Dims_create()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 17:19:13 2014" -->
<!-- isoreceived="20140210221913" -->
<!-- sent="Mon, 10 Feb 2014 23:19:51 +0100" -->
<!-- isosent="20140210221951" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Speedup for MPI_Dims_create()" -->
<!-- id="20140210221951.GA16400_at_neuromancer.fritz.box" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BC430884-80FC-4FAF-A113-0908E2827C61_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Speedup for MPI_Dims_create()<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-10 17:19:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14079.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14077.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>In reply to:</strong> <a href="13982.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Speedup for MPI_Dims_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14086.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Speedup for MPI_Dims_create()"</a>
<li><strong>Reply:</strong> <a href="14086.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Speedup for MPI_Dims_create()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff-
<br>
<p>I've seen that you've reverted the patch as it was faulty. Sorry about
<br>
that! I've attached a new patch, which applies against the current
<br>
trunk. The problem with the last patch was that it didn't catch a
<br>
special case: of all prime factors of n, there may be at most one
<br>
larger than sqrt(n). The old patch assumed that there was none. I've
<br>
included a comment in the source code so that this becomes clear for
<br>
later readers.
<br>
<p>The attached patch is more complicated than the original code, as we
<br>
now need to calculate the prime numbers and the number of their
<br>
occurrences in the integer factorization simultaneously. We can't
<br>
split both (as in the trunk) anymore, as the last prime might only be
<br>
discovered during the original getfactors().
<br>
<p>I've tested this code back to back with the original code with
<br>
1...10000 nodes and 1...6 dimensions, just to be on the sure side this
<br>
time.
<br>
<p>Best
<br>
-Andreas
<br>
<p><p>On 19:32 Mon 03 Feb     , Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Andreas --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I added the sqrt() change, which is the most important change, and then did a 2nd commit with the whitespace cleanup.  The sqrt change will likely be in 1.7.5.  I credited you in the commit log; you'll likely also get credited in NEWS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for the patch!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 19, 2013, at 9:37 AM, Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Dear all,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; please find attached a (trivial) patch to MPI_Dims_create(). When
</span><br>
<span class="quotelev2">&gt; &gt; computing the prime factors of nnodes, it is sufficient to check for
</span><br>
<span class="quotelev2">&gt; &gt; primes less or equal to sqrt(nnodes).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This was not so much of a problem in the past, but now that Tier 0
</span><br>
<span class="quotelev2">&gt; &gt; systems are capable of running O(10^6) MPI processes, the difference
</span><br>
<span class="quotelev2">&gt; &gt; in execution time is on the order of seconds (e.g. 8.86s vs. 0.04s on
</span><br>
<span class="quotelev2">&gt; &gt; my notebook, with nnproc = 10^6).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Best
</span><br>
<span class="quotelev2">&gt; &gt; -Andreas
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; PS: oh, and the patch removes some trailing whitespace. Yuck. :-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; ==========================================================
</span><br>
<span class="quotelev2">&gt; &gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev2">&gt; &gt; HPC and Grid Computing
</span><br>
<span class="quotelev2">&gt; &gt; Chair of Computer Science 3
</span><br>
<span class="quotelev2">&gt; &gt; Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
</span><br>
<span class="quotelev2">&gt; &gt; +49 9131 85-27910
</span><br>
<span class="quotelev2">&gt; &gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
</span><br>
<span class="quotelev2">&gt; &gt; ==========================================================
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (\___/)
</span><br>
<span class="quotelev2">&gt; &gt; (+'.'+)
</span><br>
<span class="quotelev2">&gt; &gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev2">&gt; &gt; signature to help him gain world domination!
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mpi_dims_create_speedup.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
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
<p>
<p>
<br><hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14078/mpi_dims_create_speedup.patch">mpi_dims_create_speedup.patch</a>
</ul>
<!-- attachment="mpi_dims_create_speedup.patch" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14078/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14079.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14077.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>In reply to:</strong> <a href="13982.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Speedup for MPI_Dims_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14086.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Speedup for MPI_Dims_create()"</a>
<li><strong>Reply:</strong> <a href="14086.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Speedup for MPI_Dims_create()"</a>
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
