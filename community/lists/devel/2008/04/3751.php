<?
$subject_val = "Re: [OMPI devel] Merging in the CPC work";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 14:54:37 2008" -->
<!-- isoreceived="20080424185437" -->
<!-- sent="Thu, 24 Apr 2008 14:54:25 -0400" -->
<!-- isosent="20080424185425" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Merging in the CPC work" -->
<!-- id="1FAB4BFE-2121-465D-9422-1A3C08628B71_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E7FD839BAFD8CA499213A6EE26F2368004C9F1_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2008-04-24 14:54:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3752.php">Jeff Squyres: "[OMPI devel] not merging in cpc3 branch tonight"</a>
<li><strong>Previous message:</strong> <a href="3750.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>In reply to:</strong> <a href="3750.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Merging in the CPC work"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did this in <a href="https://svn.open-mpi.org/trac/ompi/changeset/18279">https://svn.open-mpi.org/trac/ompi/changeset/18279</a>; the  
<br>
message is now gone if IBCM is not installed on the host.
<br>
<p>If you care: I actually used open() instead of stat(), because that  
<br>
way I can also ensure that the current user is able to both read and  
<br>
write to the device (which is also required).
<br>
<p><p>On Apr 24, 2008, at 11:03 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; ...actually, thinking about this a bit more, it might be easy to try  
</span><br>
<span class="quotelev1">&gt; to stat /dev/infiniband/ucmX before calling ib_cm_open_device.  I'll  
</span><br>
<span class="quotelev1">&gt; check into it this afternoon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From:   Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent:   Thursday, April 24, 2008 10:56 AM Eastern Standard Time
</span><br>
<span class="quotelev1">&gt; To:     pasha_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc:     Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject:        Re: [OMPI devel] Merging in the CPC work
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Its unavoidable in the current rev of libibcm :( - sean hefty tells  
</span><br>
<span class="quotelev1">&gt; me that he'll remove that message in the next release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the time being, mayhe the right solution in ompi is to not try  
</span><br>
<span class="quotelev1">&gt; to use ibcm unless its specifically requested.  :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From:   Pavel Shamis (Pasha) [mailto:pasha_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent:   Thursday, April 24, 2008 10:52 AM Eastern Standard Time
</span><br>
<span class="quotelev1">&gt; To:     Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Cc:     Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject:        Re: [OMPI devel] Merging in the CPC work
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The trivial tests Pass and now I'm running full testing.
</span><br>
<span class="quotelev1">&gt; In the NOT_XRC tests i got:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libibcm: unable to open /dev/infiniband/ucm0
</span><br>
<span class="quotelev1">&gt; libibcm: couldn't read ABI version
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But the test PASS successfully. So as I understood it use OOB. Can we
</span><br>
<span class="quotelev1">&gt; prevent the message somehow ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!  That's a result of some [helpful] error messages and  
</span><br>
<span class="quotelev1">&gt; handling
</span><br>
<span class="quotelev2">&gt; &gt; that I added yesterday when ibcm is not configured on the host.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Fixed in r18273.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 24, 2008, at 8:22 AM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The patch below resolves the segfault :
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- btl_openib_connect_ibcm.c.orig      2008-04-24  
</span><br>
<span class="quotelev1">&gt; 15:14:28.500676000
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +0300
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ btl_openib_connect_ibcm.c   2008-04-24 15:15:08.961168000 +0300
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -328,7 +328,7 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    int rc;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    modex_msg_t *msg;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -    ibcm_module_t *m;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    ibcm_module_t *m = NULL;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    opal_list_item_t *item;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    ibcm_listen_cm_id_t *cmh;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    ibcm_module_list_item_t *imli;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I had a linker error with the rdmacm library yesterday that I  
</span><br>
<span class="quotelev1">&gt; fixed
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; later, sorry.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Could you try it again?  You'll need to svn up, re-autogen,  
</span><br>
<span class="quotelev1">&gt; etc.  It
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; should be obvious whether I fixed it -- even trivial apps will  
</span><br>
<span class="quotelev1">&gt; work
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; or not work.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Apr 24, 2008, at 6:24 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Thu, Apr 24, 2008 at 11:50:10AM +0300, Pavel Shamis (Pasha)  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; All my tests fail.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; XRC disabled tests failed with:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mtt/installs/Zq_9/install/lib/openmpi/mca_btl_openib.so:  
</span><br>
<span class="quotelev1">&gt; undefined
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; symbol: rdma_create_event_channel
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; XRC enabled failed with segfault , I will take a look later  
</span><br>
<span class="quotelev1">&gt; today.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Well it is a little bit better for me. I compiled only OOB  
</span><br>
<span class="quotelev1">&gt; connection
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; manager and ompi passes simple testing.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Pasha
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; As we discussed yesterday, I have started the merge from the / 
</span><br>
<span class="quotelev1">&gt; tmp-
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; public/openib-cpc2 branch.  &quot;oob&quot; is currently the default.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Unfortunately, it caused quite a few conflicts when I merged  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; trunk, so I created a new temp branch and put all the work  
</span><br>
<span class="quotelev1">&gt; there:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; /tmp-
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; public/openib-cpc3.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Could all the IB and iWARP vendors and any other interested  
</span><br>
<span class="quotelev1">&gt; parties
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; please try this branch before we bring it back to the trunk?   
</span><br>
<span class="quotelev1">&gt; Please
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; test all functionality that you care about -- XRC, etc.  I'd  
</span><br>
<span class="quotelev1">&gt; like to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; bring it back to the trunk COB Thursday.  Please let me know  
</span><br>
<span class="quotelev1">&gt; if this
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; is too soon.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; You can force the selection of a different CPC with the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; btl_openib_cpc_include MCA param:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;    mpirun --mca btl_openib_cpc_include oob ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;    mpirun --mca btl_openib_cpc_include xoob ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;    mpirun --mca btl_openib_cpc_include rdma_cm ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;    mpirun --mca btl_openib_cpc_include ibcm ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; You might want to concentrate on testing oob and xoob to  
</span><br>
<span class="quotelev1">&gt; ensure that
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; we didn't cause any regressions.  The ibcm and rdma_cm CPCs  
</span><br>
<span class="quotelev1">&gt; probably
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; still have some rough edges (and the IBCM package in OFED  
</span><br>
<span class="quotelev1">&gt; itself may
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; not be 100% -- that's one of the things we're evaluating.  It's
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; known
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; to not install properly on RHEL4U4, for example -- you have to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; manually mknod and chmod a device in /dev/infiniband for every
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; HCA in
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; the host).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;            Gleb.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="3752.php">Jeff Squyres: "[OMPI devel] not merging in cpc3 branch tonight"</a>
<li><strong>Previous message:</strong> <a href="3750.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Merging in the CPC work"</a>
<li><strong>In reply to:</strong> <a href="3750.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Merging in the CPC work"</a>
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
