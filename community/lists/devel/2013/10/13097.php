<?
$subject_val = "[OMPI devel] oshmem build failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 16 10:23:08 2013" -->
<!-- isoreceived="20131016142308" -->
<!-- sent="Wed, 16 Oct 2013 14:23:01 +0000" -->
<!-- isosent="20131016142301" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] oshmem build failures" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F975438_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131016141814.C1E9F25EE89_at_jaguar.crest.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] oshmem build failures<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-16 10:23:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13098.php">Ralph Castain: "Re: [OMPI devel] oshmem build failures"</a>
<li><strong>Previous message:</strong> <a href="13096.php">Christopher Samuel: "Re: [OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13098.php">Ralph Castain: "Re: [OMPI devel] oshmem build failures"</a>
<li><strong>Reply:</strong> <a href="13098.php">Ralph Castain: "Re: [OMPI devel] oshmem build failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: MPI Team &lt;mpiteam_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: === CREATE FAILURE (trunk) ===
</span><br>
<span class="quotelev1">&gt; Date: October 16, 2013 10:18:14 AM EDT
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
<span class="quotelev1">&gt; Start time: Wed Oct 16 09:59:02 EDT 2013
</span><br>
<span class="quotelev1">&gt; End time:   Wed Oct 16 10:18:13 EDT 2013
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt;  CC       base/memheap_base_register.lo
</span><br>
<span class="quotelev1">&gt;  CC       base/memheap_base_mkey.lo
</span><br>
<span class="quotelev1">&gt;  CCLD     libmca_memheap.la
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29441/ompi/openmpi-1.9a1r29441/_build/oshmem/mca/memheap'
</span><br>
<span class="quotelev1">&gt; Making all in mca/scoll
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29441/ompi/openmpi-1.9a1r29441/_build/oshmem/mca/scoll'
</span><br>
<span class="quotelev1">&gt;  CC       base/scoll_base_frame.lo
</span><br>
<span class="quotelev1">&gt;  CC       base/scoll_base_available.lo
</span><br>
<span class="quotelev1">&gt;  CC       base/scoll_base_select.lo
</span><br>
<span class="quotelev1">&gt;  CCLD     libmca_scoll.la
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29441/ompi/openmpi-1.9a1r29441/_build/oshmem/mca/scoll'
</span><br>
<span class="quotelev1">&gt; Making all in mca/spml
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29441/ompi/openmpi-1.9a1r29441/_build/oshmem/mca/spml'
</span><br>
<span class="quotelev1">&gt;  CC       base/spml_base_frame.lo
</span><br>
<span class="quotelev1">&gt;  CC       base/spml_base_select.lo
</span><br>
<span class="quotelev1">&gt;  CC       base/spml_base_request.lo
</span><br>
<span class="quotelev1">&gt;  CC       base/spml_base_atomicreq.lo
</span><br>
<span class="quotelev1">&gt;  CC       base/spml_base_getreq.lo
</span><br>
<span class="quotelev1">&gt;  CC       base/spml_base_putreq.lo
</span><br>
<span class="quotelev1">&gt;  CC       base/spml_base.lo
</span><br>
<span class="quotelev1">&gt;  CCLD     libmca_spml.la
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29441/ompi/openmpi-1.9a1r29441/_build/oshmem/mca/spml'
</span><br>
<span class="quotelev1">&gt; Making all in .
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29441/ompi/openmpi-1.9a1r29441/_build/oshmem'
</span><br>
<span class="quotelev1">&gt;  CC       op/op.lo
</span><br>
<span class="quotelev1">&gt;  CC       proc/proc.lo
</span><br>
<span class="quotelev1">&gt;  CC       proc/proc_group_cache.lo
</span><br>
<span class="quotelev1">&gt;  CC       request/request.lo
</span><br>
<span class="quotelev1">&gt;  CC       runtime/oshmem_shmem_init.lo
</span><br>
<span class="quotelev1">&gt;  CC       runtime/oshmem_shmem_finalize.lo
</span><br>
<span class="quotelev1">&gt;  CC       runtime/oshmem_shmem_abort.lo
</span><br>
<span class="quotelev1">&gt;  CC       runtime/oshmem_shmem_params.lo
</span><br>
<span class="quotelev1">&gt;  CC       runtime/oshmem_shmem_exchange.lo
</span><br>
<span class="quotelev1">&gt;  CC       runtime/oshmem_info_support.lo
</span><br>
<span class="quotelev1">&gt; ../../oshmem/runtime/oshmem_info_support.c:14:46: error: oshmem/include/oshmem/frameworks.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; ../../oshmem/runtime/oshmem_info_support.c: In function 'oshmem_info_register_types':
</span><br>
<span class="quotelev1">&gt; ../../oshmem/runtime/oshmem_info_support.c:36: error: 'oshmem_frameworks' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../oshmem/runtime/oshmem_info_support.c:36: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; ../../oshmem/runtime/oshmem_info_support.c:36: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; ../../oshmem/runtime/oshmem_info_support.c: In function 'oshmem_info_register_framework_params':
</span><br>
<span class="quotelev1">&gt; ../../oshmem/runtime/oshmem_info_support.c:63: error: 'oshmem_frameworks' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../oshmem/runtime/oshmem_info_support.c: In function 'oshmem_info_close_components':
</span><br>
<span class="quotelev1">&gt; ../../oshmem/runtime/oshmem_info_support.c:70: error: 'oshmem_frameworks' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; make[3]: *** [runtime/oshmem_info_support.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29441/ompi/openmpi-1.9a1r29441/_build/oshmem'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29441/ompi/openmpi-1.9a1r29441/_build/oshmem'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29441/ompi/openmpi-1.9a1r29441/_build'
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
<li><strong>Next message:</strong> <a href="13098.php">Ralph Castain: "Re: [OMPI devel] oshmem build failures"</a>
<li><strong>Previous message:</strong> <a href="13096.php">Christopher Samuel: "Re: [OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13098.php">Ralph Castain: "Re: [OMPI devel] oshmem build failures"</a>
<li><strong>Reply:</strong> <a href="13098.php">Ralph Castain: "Re: [OMPI devel] oshmem build failures"</a>
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
