<?
$subject_val = "Re: [OMPI devel] Merging in the CPC work";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 08:23:09 2008" -->
<!-- isoreceived="20080424122309" -->
<!-- sent="Thu, 24 Apr 2008 15:22:58 +0300" -->
<!-- isosent="20080424122258" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Merging in the CPC work" -->
<!-- id="48107BA2.3010909_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9AD6F635-CAE4-453C-B82B-F58D596DC876_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Merging in the CPC work<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 08:22:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3747.php">Jeff Squyres: "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Previous message:</strong> <a href="3745.php">Jeff Squyres: "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>In reply to:</strong> <a href="3745.php">Jeff Squyres: "Re: [OMPI devel] Merging in the CPC work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3747.php">Jeff Squyres: "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Reply:</strong> <a href="3747.php">Jeff Squyres: "Re: [OMPI devel] Merging in the CPC work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The patch below resolves the segfault :
<br>
<p>-- btl_openib_connect_ibcm.c.orig      2008-04-24 15:14:28.500676000 +0300
<br>
+++ btl_openib_connect_ibcm.c   2008-04-24 15:15:08.961168000 +0300
<br>
@@ -328,7 +328,7 @@
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;modex_msg_t *msg;
<br>
-    ibcm_module_t *m;
<br>
+    ibcm_module_t *m = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_item_t *item;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibcm_listen_cm_id_t *cmh;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibcm_module_list_item_t *imli;
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I had a linker error with the rdmacm library yesterday that I fixed 
</span><br>
<span class="quotelev1">&gt; later, sorry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you try it again?  You'll need to svn up, re-autogen, etc.  It 
</span><br>
<span class="quotelev1">&gt; should be obvious whether I fixed it -- even trivial apps will work or 
</span><br>
<span class="quotelev1">&gt; not work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 24, 2008, at 6:24 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Apr 24, 2008 at 11:50:10AM +0300, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All my tests fail.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XRC disabled tests failed with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt/installs/Zq_9/install/lib/openmpi/mca_btl_openib.so: undefined
</span><br>
<span class="quotelev3">&gt;&gt;&gt; symbol: rdma_create_event_channel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XRC enabled failed with segfault , I will take a look later today.
</span><br>
<span class="quotelev2">&gt;&gt; Well it is a little bit better for me. I compiled only OOB connection
</span><br>
<span class="quotelev2">&gt;&gt; manager and ompi passes simple testing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pasha
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As we discussed yesterday, I have started the merge from the /tmp-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; public/openib-cpc2 branch.  &quot;oob&quot; is currently the default.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately, it caused quite a few conflicts when I merged with the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk, so I created a new temp branch and put all the work there: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; public/openib-cpc3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could all the IB and iWARP vendors and any other interested parties
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; please try this branch before we bring it back to the trunk?  Please
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; test all functionality that you care about -- XRC, etc.  I'd like to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bring it back to the trunk COB Thursday.  Please let me know if this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is too soon.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can force the selection of a different CPC with the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl_openib_cpc_include MCA param:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     mpirun --mca btl_openib_cpc_include oob ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     mpirun --mca btl_openib_cpc_include xoob ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     mpirun --mca btl_openib_cpc_include rdma_cm ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     mpirun --mca btl_openib_cpc_include ibcm ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You might want to concentrate on testing oob and xoob to ensure that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we didn't cause any regressions.  The ibcm and rdma_cm CPCs probably
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; still have some rough edges (and the IBCM package in OFED itself may
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not be 100% -- that's one of the things we're evaluating.  It's known
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to not install properly on RHEL4U4, for example -- you have to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; manually mknod and chmod a device in /dev/infiniband for every HCA in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the host).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;             Gleb.
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Pavel Shamis (Pasha)
Mellanox Technologies
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3747.php">Jeff Squyres: "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Previous message:</strong> <a href="3745.php">Jeff Squyres: "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>In reply to:</strong> <a href="3745.php">Jeff Squyres: "Re: [OMPI devel] Merging in the CPC work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3747.php">Jeff Squyres: "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Reply:</strong> <a href="3747.php">Jeff Squyres: "Re: [OMPI devel] Merging in the CPC work"</a>
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
