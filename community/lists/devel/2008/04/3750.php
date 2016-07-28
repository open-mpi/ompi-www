<?
$subject_val = "Re: [OMPI devel] Merging in the CPC work";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 11:03:10 2008" -->
<!-- isoreceived="20080424150310" -->
<!-- sent="Thu, 24 Apr 2008 11:03:02 -0400" -->
<!-- isosent="20080424150302" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Merging in the CPC work" -->
<!-- id="E7FD839BAFD8CA499213A6EE26F2368004C9F1_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] Merging in the CPC work" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 11:03:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3751.php">Jeff Squyres: "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Previous message:</strong> <a href="3749.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Maybe in reply to:</strong> <a href="3740.php">Jeff Squyres: "[OMPI devel] Merging in the CPC work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3751.php">Jeff Squyres: "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Reply:</strong> <a href="3751.php">Jeff Squyres: "Re: [OMPI devel] Merging in the CPC work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
...actually, thinking about this a bit more, it might be easy to try to stat /dev/infiniband/ucmX before calling ib_cm_open_device.  I'll check into it this afternoon.
<br>
<p>-jms
<br>
Sent from my PDA.  No type good.
<br>
<p>&nbsp;-----Original Message-----
<br>
From: 	Jeff Squyres (jsquyres)
<br>
Sent:	Thursday, April 24, 2008 10:56 AM Eastern Standard Time
<br>
To:	pasha_at_[hidden]
<br>
Cc:	Open MPI Developers
<br>
Subject:	Re: [OMPI devel] Merging in the CPC work
<br>
<p>Its unavoidable in the current rev of libibcm :( - sean hefty tells me that he'll remove that message in the next release.
<br>
<p>For the time being, mayhe the right solution in ompi is to not try to use ibcm unless its specifically requested.  :(
<br>
<p>-jms
<br>
Sent from my PDA.  No type good.
<br>
<p>&nbsp;-----Original Message-----
<br>
From: 	Pavel Shamis (Pasha) [mailto:pasha_at_[hidden]]
<br>
Sent:	Thursday, April 24, 2008 10:52 AM Eastern Standard Time
<br>
To:	Jeff Squyres (jsquyres)
<br>
Cc:	Open MPI Developers
<br>
Subject:	Re: [OMPI devel] Merging in the CPC work
<br>
<p>The trivial tests Pass and now I'm running full testing.
<br>
In the NOT_XRC tests i got:
<br>
<p>libibcm: unable to open /dev/infiniband/ucm0
<br>
libibcm: couldn't read ABI version
<br>
<p>But the test PASS successfully. So as I understood it use OOB. Can we 
<br>
prevent the message somehow ?
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Thanks!  That's a result of some [helpful] error messages and handling 
</span><br>
<span class="quotelev1">&gt; that I added yesterday when ibcm is not configured on the host.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fixed in r18273.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 24, 2008, at 8:22 AM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The patch below resolves the segfault :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- btl_openib_connect_ibcm.c.orig      2008-04-24 15:14:28.500676000 
</span><br>
<span class="quotelev2">&gt;&gt; +0300
</span><br>
<span class="quotelev2">&gt;&gt; +++ btl_openib_connect_ibcm.c   2008-04-24 15:15:08.961168000 +0300
</span><br>
<span class="quotelev2">&gt;&gt; @@ -328,7 +328,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    int rc;
</span><br>
<span class="quotelev2">&gt;&gt;    modex_msg_t *msg;
</span><br>
<span class="quotelev2">&gt;&gt; -    ibcm_module_t *m;
</span><br>
<span class="quotelev2">&gt;&gt; +    ibcm_module_t *m = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;    opal_list_item_t *item;
</span><br>
<span class="quotelev2">&gt;&gt;    ibcm_listen_cm_id_t *cmh;
</span><br>
<span class="quotelev2">&gt;&gt;    ibcm_module_list_item_t *imli;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I had a linker error with the rdmacm library yesterday that I fixed 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; later, sorry.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you try it again?  You'll need to svn up, re-autogen, etc.  It 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should be obvious whether I fixed it -- even trivial apps will work 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or not work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 24, 2008, at 6:24 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Apr 24, 2008 at 11:50:10AM +0300, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; All my tests fail.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; XRC disabled tests failed with:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt/installs/Zq_9/install/lib/openmpi/mca_btl_openib.so: undefined
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; symbol: rdma_create_event_channel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; XRC enabled failed with segfault , I will take a look later today.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Well it is a little bit better for me. I compiled only OOB connection
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; manager and ompi passes simple testing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Pasha
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; As we discussed yesterday, I have started the merge from the /tmp-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; public/openib-cpc2 branch.  &quot;oob&quot; is currently the default.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Unfortunately, it caused quite a few conflicts when I merged with 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trunk, so I created a new temp branch and put all the work there: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; public/openib-cpc3.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Could all the IB and iWARP vendors and any other interested parties
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; please try this branch before we bring it back to the trunk?  Please
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; test all functionality that you care about -- XRC, etc.  I'd like to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bring it back to the trunk COB Thursday.  Please let me know if this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is too soon.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; You can force the selection of a different CPC with the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_cpc_include MCA param:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    mpirun --mca btl_openib_cpc_include oob ...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    mpirun --mca btl_openib_cpc_include xoob ...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    mpirun --mca btl_openib_cpc_include rdma_cm ...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    mpirun --mca btl_openib_cpc_include ibcm ...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; You might want to concentrate on testing oob and xoob to ensure that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; we didn't cause any regressions.  The ibcm and rdma_cm CPCs probably
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; still have some rough edges (and the IBCM package in OFED itself may
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; not be 100% -- that's one of the things we're evaluating.  It's 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; known
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to not install properly on RHEL4U4, for example -- you have to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; manually mknod and chmod a device in /dev/infiniband for every 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; HCA in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the host).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Gleb.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Pavel Shamis (Pasha)
Mellanox Technologies
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3750/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3751.php">Jeff Squyres: "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Previous message:</strong> <a href="3749.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Maybe in reply to:</strong> <a href="3740.php">Jeff Squyres: "[OMPI devel] Merging in the CPC work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3751.php">Jeff Squyres: "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>Reply:</strong> <a href="3751.php">Jeff Squyres: "Re: [OMPI devel] Merging in the CPC work"</a>
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
