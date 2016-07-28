<?
$subject_val = "Re: [OMPI devel] Speedup for MPI_Dims_create()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 19:33:26 2014" -->
<!-- isoreceived="20140211003326" -->
<!-- sent="Tue, 11 Feb 2014 00:33:25 +0000" -->
<!-- isosent="20140211003325" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Speedup for MPI_Dims_create()" -->
<!-- id="41F69704-E78A-4296-9F0B-3CB402AF9383_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20140210221951.GA16400_at_neuromancer.fritz.box" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-10 19:33:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14087.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Previous message:</strong> <a href="14085.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14078.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Speedup for MPI_Dims_create()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cool.
<br>
<p>See the other thread where I'm wondering if we shouldn't just pre-generate all the primes, hard-code them into a table, and be done with this issue.
<br>
<p><p>On Feb 10, 2014, at 5:19 PM, Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've seen that you've reverted the patch as it was faulty. Sorry about
</span><br>
<span class="quotelev1">&gt; that! I've attached a new patch, which applies against the current
</span><br>
<span class="quotelev1">&gt; trunk. The problem with the last patch was that it didn't catch a
</span><br>
<span class="quotelev1">&gt; special case: of all prime factors of n, there may be at most one
</span><br>
<span class="quotelev1">&gt; larger than sqrt(n). The old patch assumed that there was none. I've
</span><br>
<span class="quotelev1">&gt; included a comment in the source code so that this becomes clear for
</span><br>
<span class="quotelev1">&gt; later readers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached patch is more complicated than the original code, as we
</span><br>
<span class="quotelev1">&gt; now need to calculate the prime numbers and the number of their
</span><br>
<span class="quotelev1">&gt; occurrences in the integer factorization simultaneously. We can't
</span><br>
<span class="quotelev1">&gt; split both (as in the trunk) anymore, as the last prime might only be
</span><br>
<span class="quotelev1">&gt; discovered during the original getfactors().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've tested this code back to back with the original code with
</span><br>
<span class="quotelev1">&gt; 1...10000 nodes and 1...6 dimensions, just to be on the sure side this
</span><br>
<span class="quotelev1">&gt; time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt; -Andreas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 19:32 Mon 03 Feb     , Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Andreas --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I added the sqrt() change, which is the most important change, and then did a 2nd commit with the whitespace cleanup.  The sqrt change will likely be in 1.7.5.  I credited you in the commit log; you'll likely also get credited in NEWS.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for the patch!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 19, 2013, at 9:37 AM, Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; please find attached a (trivial) patch to MPI_Dims_create(). When
</span><br>
<span class="quotelev3">&gt;&gt;&gt; computing the prime factors of nnodes, it is sufficient to check for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; primes less or equal to sqrt(nnodes).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This was not so much of a problem in the past, but now that Tier 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; systems are capable of running O(10^6) MPI processes, the difference
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in execution time is on the order of seconds (e.g. 8.86s vs. 0.04s on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my notebook, with nnproc = 10^6).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Andreas
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PS: oh, and the patch removes some trailing whitespace. Yuck. :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==========================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC and Grid Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chair of Computer Science 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +49 9131 85-27910
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==========================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (\___/)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (+'.'+)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signature to help him gain world domination!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mpi_dims_create_speedup.patch&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ==========================================================
</span><br>
<span class="quotelev1">&gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev1">&gt; HPC and Grid Computing
</span><br>
<span class="quotelev1">&gt; Chair of Computer Science 3
</span><br>
<span class="quotelev1">&gt; Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
</span><br>
<span class="quotelev1">&gt; +49 9131 85-27910
</span><br>
<span class="quotelev1">&gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev1">&gt; <a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
</span><br>
<span class="quotelev1">&gt; ==========================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (\___/)
</span><br>
<span class="quotelev1">&gt; (+'.'+)
</span><br>
<span class="quotelev1">&gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev1">&gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev1">&gt; signature to help him gain world domination!
</span><br>
<span class="quotelev1">&gt; &lt;mpi_dims_create_speedup.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14087.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Previous message:</strong> <a href="14085.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14078.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Speedup for MPI_Dims_create()"</a>
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
