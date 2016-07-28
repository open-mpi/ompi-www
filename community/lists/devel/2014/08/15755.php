<?
$subject_val = "Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 10:41:24 2014" -->
<!-- isoreceived="20140829144124" -->
<!-- sent="Fri, 29 Aug 2014 14:41:23 +0000" -->
<!-- isosent="20140829144123" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite" -->
<!-- id="22DC6E05-60E9-42DF-8E88-7B30E55D93D2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53FC34A0.5030106_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-29 10:41:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15756.php">Ralph Castain: "Re: [OMPI devel] Fwd: recomended software stack for development?"</a>
<li><strong>Previous message:</strong> <a href="15754.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: recomended software stack for development?"</a>
<li><strong>In reply to:</strong> <a href="15707.php">Gilles Gouaillardet: "[OMPI devel] about the test_shmem_zero_get.x test from the openshmem test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15766.php">Gilles Gouaillardet: "Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15766.php">Gilles Gouaillardet: "Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles --
<br>
<p>Did you get a reply about this?
<br>
<p><p>On Aug 26, 2014, at 3:17 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the test_shmem_zero_get.x from the openshmem-release-1.0d test suite is
</span><br>
<span class="quotelev1">&gt; currently failing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i looked at the test itself, and compared it to test_shmem_zero_put.x
</span><br>
<span class="quotelev1">&gt; (that is a success) and
</span><br>
<span class="quotelev1">&gt; i am very puzzled ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the test calls several flavors of shmem_*_get where :
</span><br>
<span class="quotelev1">&gt; - the destination is in the shmem (why not, but this is useless)
</span><br>
<span class="quotelev1">&gt; - the source is *not* in the shmem
</span><br>
<span class="quotelev1">&gt; - the number of elements to be transferred is zero
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; currently, this is failing because the source is *not* in the shmem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) is the test itself correct ?
</span><br>
<span class="quotelev1">&gt; i mean that if we compare it to test_shmem_zero_put.x, i would guess that
</span><br>
<span class="quotelev1">&gt; destination should be in the local memory and source should be in the shmem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) should shmem_*_get even fail ?
</span><br>
<span class="quotelev1">&gt; i mean there is zero data to be transferred, so why do we even care
</span><br>
<span class="quotelev1">&gt; whether source is in the shmem or not ?
</span><br>
<span class="quotelev1">&gt; is the openshmem standard explicit about this case (e.g. zero elements
</span><br>
<span class="quotelev1">&gt; to be transferred) ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) is a failure expected ?
</span><br>
<span class="quotelev1">&gt; even if i doubt it, this is an option ... and in this case, mtt should
</span><br>
<span class="quotelev1">&gt; be aware about it and report a success when the test fails
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4) the test is a success on v1.8.
</span><br>
<span class="quotelev1">&gt; the reason is the default configure value is --oshmem-param-check=never
</span><br>
<span class="quotelev1">&gt; on v1.8 whereas it is --oshmem-param-check=always on trunk
</span><br>
<span class="quotelev1">&gt; is there any reason for this ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15707.php">http://www.open-mpi.org/community/lists/devel/2014/08/15707.php</a>
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
<li><strong>Next message:</strong> <a href="15756.php">Ralph Castain: "Re: [OMPI devel] Fwd: recomended software stack for development?"</a>
<li><strong>Previous message:</strong> <a href="15754.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: recomended software stack for development?"</a>
<li><strong>In reply to:</strong> <a href="15707.php">Gilles Gouaillardet: "[OMPI devel] about the test_shmem_zero_get.x test from the openshmem test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15766.php">Gilles Gouaillardet: "Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15766.php">Gilles Gouaillardet: "Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite"</a>
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
