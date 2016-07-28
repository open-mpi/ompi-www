<?
$subject_val = "Re: [OMPI devel] Merging in the CPC work";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 07:56:01 2008" -->
<!-- isoreceived="20080424115601" -->
<!-- sent="Thu, 24 Apr 2008 07:55:51 -0400" -->
<!-- isosent="20080424115551" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Merging in the CPC work" -->
<!-- id="9AD6F635-CAE4-453C-B82B-F58D596DC876_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080424102405.GI9341_at_minantech.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 07:55:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3746.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Previous message:</strong> <a href="3744.php">Gleb Natapov: "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>In reply to:</strong> <a href="3744.php">Gleb Natapov: "Re: [OMPI devel] Merging in the CPC work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3746.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Reply:</strong> <a href="3746.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Merging in the CPC work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had a linker error with the rdmacm library yesterday that I fixed  
<br>
later, sorry.
<br>
<p>Could you try it again?  You'll need to svn up, re-autogen, etc.  It  
<br>
should be obvious whether I fixed it -- even trivial apps will work or  
<br>
not work.
<br>
<p>Thanks.
<br>
<p><p>On Apr 24, 2008, at 6:24 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Apr 24, 2008 at 11:50:10AM +0300, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; All my tests fail.
</span><br>
<span class="quotelev2">&gt;&gt; XRC disabled tests failed with:
</span><br>
<span class="quotelev2">&gt;&gt; mtt/installs/Zq_9/install/lib/openmpi/mca_btl_openib.so: undefined
</span><br>
<span class="quotelev2">&gt;&gt; symbol: rdma_create_event_channel
</span><br>
<span class="quotelev2">&gt;&gt; XRC enabled failed with segfault , I will take a look later today.
</span><br>
<span class="quotelev1">&gt; Well it is a little bit better for me. I compiled only OOB connection
</span><br>
<span class="quotelev1">&gt; manager and ompi passes simple testing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pasha
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As we discussed yesterday, I have started the merge from the /tmp-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; public/openib-cpc2 branch.  &quot;oob&quot; is currently the default.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, it caused quite a few conflicts when I merged with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk, so I created a new temp branch and put all the work there: / 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tmp-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; public/openib-cpc3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could all the IB and iWARP vendors and any other interested parties
</span><br>
<span class="quotelev3">&gt;&gt;&gt; please try this branch before we bring it back to the trunk?  Please
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test all functionality that you care about -- XRC, etc.  I'd like to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bring it back to the trunk COB Thursday.  Please let me know if this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is too soon.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can force the selection of a different CPC with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_cpc_include MCA param:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mpirun --mca btl_openib_cpc_include oob ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mpirun --mca btl_openib_cpc_include xoob ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mpirun --mca btl_openib_cpc_include rdma_cm ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mpirun --mca btl_openib_cpc_include ibcm ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You might want to concentrate on testing oob and xoob to ensure that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we didn't cause any regressions.  The ibcm and rdma_cm CPCs probably
</span><br>
<span class="quotelev3">&gt;&gt;&gt; still have some rough edges (and the IBCM package in OFED itself may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not be 100% -- that's one of the things we're evaluating.  It's  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; known
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to not install properly on RHEL4U4, for example -- you have to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; manually mknod and chmod a device in /dev/infiniband for every HCA  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the host).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3746.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Previous message:</strong> <a href="3744.php">Gleb Natapov: "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>In reply to:</strong> <a href="3744.php">Gleb Natapov: "Re: [OMPI devel] Merging in the CPC work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3746.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Reply:</strong> <a href="3746.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Merging in the CPC work"</a>
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
