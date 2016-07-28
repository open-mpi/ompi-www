<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 21:17:43 2014" -->
<!-- isoreceived="20140729011743" -->
<!-- sent="Mon, 28 Jul 2014 18:16:08 -0700" -->
<!-- isosent="20140729011608" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="C28D4AE1-7A0F-4629-AF97-653EA9B584CE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140729011103.117AE25EFAD_at_jaguar.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-28 21:16:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15303.php">tmishima_at_[hidden]: "[OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15301.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_config_bottom.h problem with trunk"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fix is coming
<br>
<p>On Jul 28, 2014, at 6:11 PM, MPI Team &lt;mpiteam_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev1">&gt;       make -j 8 distcheck
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Start time: Mon Jul 28 21:05:01 EDT 2014
</span><br>
<span class="quotelev1">&gt; End time:   Mon Jul 28 21:11:02 EDT 2014
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt;  CC       class/opal_ring_buffer.lo
</span><br>
<span class="quotelev1">&gt;  CC       class/opal_rb_tree.lo
</span><br>
<span class="quotelev1">&gt;  CC       class/ompi_free_list.lo
</span><br>
<span class="quotelev1">&gt;  CC       memoryhooks/memory.lo
</span><br>
<span class="quotelev1">&gt;  CC       runtime/opal_progress.lo
</span><br>
<span class="quotelev1">&gt;  CC       runtime/opal_finalize.lo
</span><br>
<span class="quotelev1">&gt;  CC       runtime/opal_init.lo
</span><br>
<span class="quotelev1">&gt;  CC       runtime/opal_params.lo
</span><br>
<span class="quotelev1">&gt;  CC       runtime/opal_cr.lo
</span><br>
<span class="quotelev1">&gt;  CC       runtime/opal_info_support.lo
</span><br>
<span class="quotelev1">&gt;  CC       runtime/opal_progress_threads.lo
</span><br>
<span class="quotelev1">&gt;  CC       threads/condition.lo
</span><br>
<span class="quotelev1">&gt;  CC       threads/mutex.lo
</span><br>
<span class="quotelev1">&gt;  CC       threads/thread.lo
</span><br>
<span class="quotelev1">&gt;  CC       threads/tsd.lo
</span><br>
<span class="quotelev1">&gt;  CC       dss/dss_internal_functions.lo
</span><br>
<span class="quotelev1">&gt;  CC       dss/dss_compare.lo
</span><br>
<span class="quotelev1">&gt;  CC       dss/dss_copy.lo
</span><br>
<span class="quotelev1">&gt;  CC       dss/dss_dump.lo
</span><br>
<span class="quotelev1">&gt;  CC       dss/dss_load_unload.lo
</span><br>
<span class="quotelev1">&gt;  CC       dss/dss_lookup.lo
</span><br>
<span class="quotelev1">&gt;  CC       dss/dss_pack.lo
</span><br>
<span class="quotelev1">&gt;  CC       dss/dss_peek.lo
</span><br>
<span class="quotelev1">&gt;  CC       dss/dss_print.lo
</span><br>
<span class="quotelev1">&gt;  CC       dss/dss_register.lo
</span><br>
<span class="quotelev1">&gt;  CC       dss/dss_unpack.lo
</span><br>
<span class="quotelev1">&gt;  CC       dss/dss_open_close.lo
</span><br>
<span class="quotelev1">&gt;  CCLD     libopen-pal.la
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r32335/ompi/openmpi-1.9a1r32335/_build/opal'
</span><br>
<span class="quotelev1">&gt; Making all in mca/common/sm
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r32335/ompi/openmpi-1.9a1r32335/_build/opal/mca/common/sm'
</span><br>
<span class="quotelev1">&gt;  CC       common_sm.lo
</span><br>
<span class="quotelev1">&gt;  LN_S     libmca_common_sm.la
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/common/sm/common_sm.c:54:27: error: common_sm_rml.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/common/sm/common_sm.c: In function 'attach_and_init':
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/common/sm/common_sm.c:83: warning: implicit declaration of function 'opal_shmem_segment_attach'
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/common/sm/common_sm.c:83: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/common/sm/common_sm.c:90: warning: implicit declaration of function 'opal_shmem_segment_detach'
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/common/sm/common_sm.c:96: warning: implicit declaration of function 'opal_shmem_ds_copy'
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/common/sm/common_sm.c: In function 'mca_common_sm_module_create_and_attach':
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/common/sm/common_sm.c:172: warning: implicit declaration of function 'opal_shmem_segment_create'
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/common/sm/common_sm.c: In function 'mca_common_sm_module_unlink':
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/common/sm/common_sm.c:208: warning: implicit declaration of function 'opal_shmem_unlink'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [common_sm.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r32335/ompi/openmpi-1.9a1r32335/_build/opal/mca/common/sm'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r32335/ompi/openmpi-1.9a1r32335/_build/opal'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r32335/ompi/openmpi-1.9a1r32335/_build'
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15303.php">tmishima_at_[hidden]: "[OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15301.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_config_bottom.h problem with trunk"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
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
