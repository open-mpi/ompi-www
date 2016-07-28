<?
$subject_val = "Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  1 04:22:20 2014" -->
<!-- isoreceived="20140901082220" -->
<!-- sent="Mon, 01 Sep 2014 17:22:18 +0900" -->
<!-- isosent="20140901082218" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite" -->
<!-- id="54042CBA.6060909_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="22DC6E05-60E9-42DF-8E88-7B30E55D93D2_at_cisco.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-01 04:22:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15767.php">Gilles Gouaillardet: "[OMPI devel] race condition in coll/ml"</a>
<li><strong>Previous message:</strong> <a href="15765.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15755.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>i did not get any reply :-(
<br>
<p>from the OpenSHMEM 1.1 specs :
<br>
<p>Data object on the PE identified by pe that contains the data to be
<br>
copied. This data object must be remotely accessible.
<br>
<p>so i assumed the test was incorrect and i commited a new one (r2418)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/08/29 23:41, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Gilles --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you get a reply about this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 26, 2014, at 3:17 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the test_shmem_zero_get.x from the openshmem-release-1.0d test suite is
</span><br>
<span class="quotelev2">&gt;&gt; currently failing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i looked at the test itself, and compared it to test_shmem_zero_put.x
</span><br>
<span class="quotelev2">&gt;&gt; (that is a success) and
</span><br>
<span class="quotelev2">&gt;&gt; i am very puzzled ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the test calls several flavors of shmem_*_get where :
</span><br>
<span class="quotelev2">&gt;&gt; - the destination is in the shmem (why not, but this is useless)
</span><br>
<span class="quotelev2">&gt;&gt; - the source is *not* in the shmem
</span><br>
<span class="quotelev2">&gt;&gt; - the number of elements to be transferred is zero
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; currently, this is failing because the source is *not* in the shmem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) is the test itself correct ?
</span><br>
<span class="quotelev2">&gt;&gt; i mean that if we compare it to test_shmem_zero_put.x, i would guess that
</span><br>
<span class="quotelev2">&gt;&gt; destination should be in the local memory and source should be in the shmem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) should shmem_*_get even fail ?
</span><br>
<span class="quotelev2">&gt;&gt; i mean there is zero data to be transferred, so why do we even care
</span><br>
<span class="quotelev2">&gt;&gt; whether source is in the shmem or not ?
</span><br>
<span class="quotelev2">&gt;&gt; is the openshmem standard explicit about this case (e.g. zero elements
</span><br>
<span class="quotelev2">&gt;&gt; to be transferred) ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) is a failure expected ?
</span><br>
<span class="quotelev2">&gt;&gt; even if i doubt it, this is an option ... and in this case, mtt should
</span><br>
<span class="quotelev2">&gt;&gt; be aware about it and report a success when the test fails
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4) the test is a success on v1.8.
</span><br>
<span class="quotelev2">&gt;&gt; the reason is the default configure value is --oshmem-param-check=never
</span><br>
<span class="quotelev2">&gt;&gt; on v1.8 whereas it is --oshmem-param-check=always on trunk
</span><br>
<span class="quotelev2">&gt;&gt; is there any reason for this ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15707.php">http://www.open-mpi.org/community/lists/devel/2014/08/15707.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15767.php">Gilles Gouaillardet: "[OMPI devel] race condition in coll/ml"</a>
<li><strong>Previous message:</strong> <a href="15765.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15755.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite"</a>
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
