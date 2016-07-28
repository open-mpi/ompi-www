<?
$subject_val = "Re: [OMPI devel] Reviewing MPI_Dims_create";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 11 10:34:13 2014" -->
<!-- isoreceived="20140211153413" -->
<!-- sent="Tue, 11 Feb 2014 15:33:53 +0000" -->
<!-- isosent="20140211153353" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Reviewing MPI_Dims_create" -->
<!-- id="93FCFCCE-4945-427C-94D6-A638EC37EB7A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20140211142526.GA12748_at_neuromancer" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-11 10:33:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<li><strong>Previous message:</strong> <a href="14100.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<li><strong>In reply to:</strong> <a href="14099.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>On Feb 11, 2014, at 9:25 AM, Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; On 15:20 Tue 11 Feb     , Christoph Niethammer wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ah and some restults for MPI_Dims_create(1000000, 3, {})
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; original: 8.110628 sec
</span><br>
<span class="quotelev2">&gt;&gt; optimized-primes: 0.048702 sec
</span><br>
<span class="quotelev2">&gt;&gt; optimized-factorization: 0.000013 sec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Awesome! I didn't expect that nested loop for checking whether a
</span><br>
<span class="quotelev1">&gt; factor would still have such an impact.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Andreas
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
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="14102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<li><strong>Previous message:</strong> <a href="14100.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: Changing 32-bit build behavior/sizes for MPI_Count and MPI_Offset"</a>
<li><strong>In reply to:</strong> <a href="14099.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
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
