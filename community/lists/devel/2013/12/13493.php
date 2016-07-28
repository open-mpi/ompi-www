<?
$subject_val = "Re: [OMPI devel] Speedup for MPI_Dims_create()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 12:26:03 2013" -->
<!-- isoreceived="20131219172603" -->
<!-- sent="Thu, 19 Dec 2013 17:26:01 +0000" -->
<!-- isosent="20131219172601" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Speedup for MPI_Dims_create()" -->
<!-- id="8EFE40E0-19D7-401C-81F6-33581659586F_at_cisco.com" -->
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
<strong>Date:</strong> 2013-12-19 12:26:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13494.php">Hjelm, Nathan T: "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<li><strong>Previous message:</strong> <a href="13492.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<li><strong>In reply to:</strong> <a href="13483.php">Andreas Sch&#228;fer: "[OMPI devel] Speedup for MPI_Dims_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/02/13982.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Speedup for MPI_Dims_create()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andreas --
<br>
<p>Thanks for the patch.  Can I ask two things?
<br>
<p>1. Can you separate the patch into two: one with the code change, and another with the whitespace update?  It will help the readability of the logs to see the exact code change, rather than bury it in a syntax update.
<br>
<p>2. You added a copyright notice, which is great.  However, it puts this patch in a strange position for us -- I think we'd be comfortable with a copyrighted patch if we have a 3rd party agreement on file from your organization (i.e., so that the copyright holder won't come back to us later and sue us for distributing the patch under the BSD license).  I think there are two options here (and IANAL, so I could well be wrong here):
<br>
<p>2a. Re-submit the patch without a copyright header.  It's such a small patch (1 line of code change, AFAICT?) that I think we can accept it without a contribution agreement.  We'd cite you in the NEWS file and commit logs, of course.
<br>
2b. Submit a third party contribution agreement (see <a href="http://www.open-mpi.org/community/contribute/">http://www.open-mpi.org/community/contribute/</a>).  Then we can list your organization under <a href="http://www.open-mpi.org/about/members/">http://www.open-mpi.org/about/members/</a>, and we can accept the patch with the copyright header.
<br>
<p>Thanks!
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
<li><strong>Next message:</strong> <a href="13494.php">Hjelm, Nathan T: "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<li><strong>Previous message:</strong> <a href="13492.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<li><strong>In reply to:</strong> <a href="13483.php">Andreas Sch&#228;fer: "[OMPI devel] Speedup for MPI_Dims_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/02/13982.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Speedup for MPI_Dims_create()"</a>
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
