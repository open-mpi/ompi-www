<?
$subject_val = "Re: [OMPI devel] MTT failures since the last few days on ppc64";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 06:00:14 2015" -->
<!-- isoreceived="20150909100014" -->
<!-- sent="Wed, 9 Sep 2015 10:00:10 +0000" -->
<!-- isosent="20150909100010" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT failures since the last few days on ppc64" -->
<!-- id="D957F479-45F3-4EC4-A72D-9494EB889A95_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150909094133.GD11517_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MTT failures since the last few days on ppc64<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-09 06:00:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17990.php">Adrian Reber: "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>Previous message:</strong> <a href="17988.php">Adrian Reber: "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>In reply to:</strong> <a href="17988.php">Adrian Reber: "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17990.php">Adrian Reber: "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>Reply:</strong> <a href="17990.php">Adrian Reber: "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try making clean (perhaps just in ompi/coll/ml) and trying again -- this looks like it could just be a stale file in your tree.
<br>
<p><span class="quotelev1">&gt; On Sep 9, 2015, at 5:41 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was about to try Gilles' patch but the current master checkout does
</span><br>
<span class="quotelev1">&gt; not build on my ppc64 system: (b79cffc73b88c2e5e2f2161e096c49aed5b9d2ed)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making all in mca/coll/ml
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory '/home/adrian/ompi/build/ompi/mca/coll/ml'
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../../libtool  --tag=CC   --mode=link gcc -std=gnu99  -g -Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-declaration -finline-functions -fno-strict-aliasing -pthread -module -avoid-version  -o mca_coll_ml.la -rpath /tmp/ompi/lib/openmpi coll_ml_module.lo coll_ml_allocation.lo coll_ml_barrier.lo coll_ml_bcast.lo coll_ml_component.lo coll_ml_copy_fns.lo coll_ml_descriptors.lo coll_ml_hier_algorithms.lo coll_ml_hier_algorithms_setup.lo coll_ml_hier_algorithms_bcast_setup.lo coll_ml_hier_algorithms_allreduce_setup.lo coll_ml_hier_algorithms_reduce_setup.lo coll_ml_hier_algorithms_common_setup.lo coll_ml_hier_algorithms_allgather_setup.lo coll_ml_hier_algorithm_memsync_setup.lo coll_ml_custom_utils.lo coll_ml_progress.lo coll_ml_reduce.lo coll_ml_allreduce.lo coll_ml_allgather.lo coll_ml_mca.lo coll_ml_lmngr.lo coll_ml_hier_algorithms_barrier_setup.lo coll_ml_select.lo coll_ml_memsync.
</span><br>
<span class="quotelev1">&gt; lo coll_ml_lex.lo coll_ml_config.lo  -lrt  -lm -lutil   -lm -lutil  
</span><br>
<span class="quotelev1">&gt; libtool: link: `coll_ml_bcast.lo' is not a valid libtool object
</span><br>
<span class="quotelev1">&gt; Makefile:1860: recipe for target 'mca_coll_ml.la' failed
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mca_coll_ml.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory '/home/adrian/ompi/build/ompi/mca/coll/ml'
</span><br>
<span class="quotelev1">&gt; Makefile:3366: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 08, 2015 at 05:19:56PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Adrian; I turned this into <a href="https://github.com/open-mpi/ompi/issues/874">https://github.com/open-mpi/ompi/issues/874</a>.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 8, 2015, at 9:56 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since a few days the MTT runs on my ppc64 systems are failing with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bimini:11716] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bimini:11716] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bimini:11716] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bimini:11716] Failing at address: (nil)[bimini:11716] [ 0] [0x3fffa2bb0448]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bimini:11716] [ 1] /lib64/libc.so.6(+0xcb074)[0x3fffa27eb074] [bimini:11716] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/adrian/mtt-scratch/installs/GubX/install/lib/libpmix.so.0(opal_pmix_pmix1xx_pmix_value_xfer-0x68758)[0x3fffa2158a10] [bimini:11716] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/adrian/mtt-scratch/installs/GubX/install/lib/libpmix.so.0(OPAL_PMIX_PMIX1XX_PMIx_Put-0x48338)[0x3fffa2179f70] [bimini:11716] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/adrian/mtt-scratch/installs/GubX/install/lib/openmpi/mca_pmix_pmix1xx.so(pmix1_put-0x27efc)[0x3fffa21d858c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think I do not see these kind of errors on any of the other MTT setups
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so it might be ppc64 related. Just wanted to point it out.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 		Adrian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17979.php">http://www.open-mpi.org/community/lists/devel/2015/09/17979.php</a>
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17981.php">http://www.open-mpi.org/community/lists/devel/2015/09/17981.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17988.php">http://www.open-mpi.org/community/lists/devel/2015/09/17988.php</a>
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
<li><strong>Next message:</strong> <a href="17990.php">Adrian Reber: "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>Previous message:</strong> <a href="17988.php">Adrian Reber: "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>In reply to:</strong> <a href="17988.php">Adrian Reber: "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17990.php">Adrian Reber: "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>Reply:</strong> <a href="17990.php">Adrian Reber: "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
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
