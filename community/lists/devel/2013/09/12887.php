<?
$subject_val = "[OMPI devel] Fwd: === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 13 00:50:27 2013" -->
<!-- isoreceived="20130913045027" -->
<!-- sent="Fri, 13 Sep 2013 04:50:26 +0000" -->
<!-- isosent="20130913045026" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: === CREATE FAILURE (trunk) ===" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8A39D0_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201309130148.r8D1mlml015111_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-13 00:50:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12888.php">Max Staufer: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>Previous message:</strong> <a href="12886.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bah -- I forwarded the wrong build failure.  This is the shmem failure that has failed for the last 2 nights.
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: MPI Team &lt;mpiteam_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: === CREATE FAILURE (trunk) ===
</span><br>
<span class="quotelev1">&gt; Date: September 13, 2013 3:48:47 AM GMT+02:00
</span><br>
<span class="quotelev1">&gt; To: &lt;testing_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev1">&gt;       make distcheck
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Start time: Thu Sep 12 21:00:01 EDT 2013
</span><br>
<span class="quotelev1">&gt; End time:   Thu Sep 12 21:48:46 EDT 2013
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt;  CC       shmem_get.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_broadcast.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_collect.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_ptr.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_pe_accessible.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_addr_accessible.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_barrier.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_fence.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_quiet.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_wait.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_iget.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_iput.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_udcflush.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_udcflush_line.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_set_cache_inv.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_set_cache_line_inv.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_clear_cache_inv.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_clear_cache_line_inv.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_reduce.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_swap.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_cswap.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_fadd.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_finc.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_add.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_inc.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_clear_lock.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_set_lock.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_test_lock.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_lock.lo
</span><br>
<span class="quotelev1">&gt;  CCLD     libshmem_c.la
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29158/ompi/openmpi-1.9a1r29158/_build/oshmem/shmem/c'
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29158/ompi/openmpi-1.9a1r29158/_build/oshmem/shmem/c'
</span><br>
<span class="quotelev1">&gt; Making all in shmem/f77
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29158/ompi/openmpi-1.9a1r29158/_build/oshmem/shmem/f77'
</span><br>
<span class="quotelev1">&gt;  CC       start_pes_f.lo
</span><br>
<span class="quotelev1">&gt;  CC       num_pes_f.lo
</span><br>
<span class="quotelev1">&gt;  CC       my_pe_f.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_finalize_f.lo
</span><br>
<span class="quotelev1">&gt;  CC       shmem_barrier_all_f.lo
</span><br>
<span class="quotelev1">&gt;  CC       shpalloc_f.lo
</span><br>
<span class="quotelev1">&gt;  CC       shpdeallc_f.lo
</span><br>
<span class="quotelev1">&gt; ../../../../oshmem/shmem/f77/shpdeallc_f.c: In function `shpdeallc_f':
</span><br>
<span class="quotelev1">&gt; ../../../../oshmem/shmem/f77/shpdeallc_f.c:28: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make[3]: *** [shpdeallc_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29158/ompi/openmpi-1.9a1r29158/_build/oshmem/shmem/f77'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29158/ompi/openmpi-1.9a1r29158/_build/oshmem'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29158/ompi/openmpi-1.9a1r29158/_build'
</span><br>
<span class="quotelev1">&gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your friendly daemon,
</span><br>
<span class="quotelev1">&gt; Cyrador
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; testing mailing list
</span><br>
<span class="quotelev1">&gt; testing_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
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
<li><strong>Next message:</strong> <a href="12888.php">Max Staufer: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>Previous message:</strong> <a href="12886.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: === CREATE FAILURE (trunk) ==="</a>
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
