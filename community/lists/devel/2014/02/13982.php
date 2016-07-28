<?
$subject_val = "Re: [OMPI devel] Speedup for MPI_Dims_create()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  3 14:32:19 2014" -->
<!-- isoreceived="20140203193219" -->
<!-- sent="Mon, 3 Feb 2014 19:32:18 +0000" -->
<!-- isosent="20140203193218" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Speedup for MPI_Dims_create()" -->
<!-- id="BC430884-80FC-4FAF-A113-0908E2827C61_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20131219143759.GA29628_at_neuromancer" -->
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
<strong>Date:</strong> 2014-02-03 14:32:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13983.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv"</a>
<li><strong>Previous message:</strong> <a href="13981.php">Bert Wesarg: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13483.php">Andreas Sch&#228;fer: "[OMPI devel] Speedup for MPI_Dims_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14078.php">Andreas Schäfer: "Re: [OMPI devel] Speedup for MPI_Dims_create()"</a>
<li><strong>Reply:</strong> <a href="14078.php">Andreas Schäfer: "Re: [OMPI devel] Speedup for MPI_Dims_create()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andreas --
<br>
<p>I added the sqrt() change, which is the most important change, and then did a 2nd commit with the whitespace cleanup.  The sqrt change will likely be in 1.7.5.  I credited you in the commit log; you'll likely also get credited in NEWS.
<br>
<p>Thank you for the patch!
<br>
<p><p>On Dec 19, 2013, at 9:37 AM, Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; please find attached a (trivial) patch to MPI_Dims_create(). When
</span><br>
<span class="quotelev1">&gt; computing the prime factors of nnodes, it is sufficient to check for
</span><br>
<span class="quotelev1">&gt; primes less or equal to sqrt(nnodes).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This was not so much of a problem in the past, but now that Tier 0
</span><br>
<span class="quotelev1">&gt; systems are capable of running O(10^6) MPI processes, the difference
</span><br>
<span class="quotelev1">&gt; in execution time is on the order of seconds (e.g. 8.86s vs. 0.04s on
</span><br>
<span class="quotelev1">&gt; my notebook, with nnproc = 10^6).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt; -Andreas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: oh, and the patch removes some trailing whitespace. Yuck. :-)
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="13983.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv"</a>
<li><strong>Previous message:</strong> <a href="13981.php">Bert Wesarg: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13483.php">Andreas Sch&#228;fer: "[OMPI devel] Speedup for MPI_Dims_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14078.php">Andreas Schäfer: "Re: [OMPI devel] Speedup for MPI_Dims_create()"</a>
<li><strong>Reply:</strong> <a href="14078.php">Andreas Schäfer: "Re: [OMPI devel] Speedup for MPI_Dims_create()"</a>
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
