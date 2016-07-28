<?
$subject_val = "Re: [OMPI devel] RDMA CM CPC HG ready again";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 08:09:19 2008" -->
<!-- isoreceived="20081001120919" -->
<!-- sent="Wed, 1 Oct 2008 08:08:48 -0400" -->
<!-- isosent="20081001120848" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RDMA CM CPC HG ready again" -->
<!-- id="0724234D-2B7B-4C8C-B34B-2034A4966CC5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C39D9FFD-04C8-43B9-B5F0-6C78E0591397_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RDMA CM CPC HG ready again<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-01 08:08:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4723.php">Leonardo Fialho: "[OMPI devel] Update orte_proc structure"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/09/4721.php">Ralph Castain: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/09/4718.php">Jeff Squyres: "[OMPI devel] RDMA CM CPC HG ready again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4724.php">Jon Mason: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<li><strong>Reply:</strong> <a href="4724.php">Jon Mason: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per the call yesterday, I'll merge this into the trunk once I get it  
<br>
working with Brad on PPC.
<br>
<p>Brad and I discovered a missing htonl/ntohl somewhere in the code last  
<br>
night right before I had to go offline (i.e., we can see the IP  
<br>
addresses are backwards, but don't know where it's coming from) on  
<br>
PPC, so I haven't finished yet.  We'll probably get it fixed up today.
<br>
<p><p>On Sep 30, 2008, at 10:05 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; (putting this on devel just so that others can see it)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, I put in all the things in the RDMA CM CPC HG tree that we've  
</span><br>
<span class="quotelev1">&gt; talked about and it now should work out of the box with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - any iwarp (no need for kernel hacks to have initiator send first)
</span><br>
<span class="quotelev1">&gt; - any IB (setup the stuff to do the initiator_depth and  
</span><br>
<span class="quotelev1">&gt; responder_resources properly)
</span><br>
<span class="quotelev1">&gt; - any [valid but] bizarre IP addressing scheme
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could everyone try the HG tree again to ensure it still/now works  
</span><br>
<span class="quotelev1">&gt; for you out of the box?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/openib-fd">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/openib-fd</a>- 
</span><br>
<span class="quotelev1">&gt; progress/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try with changeset 106 (b046bf97deab) or later.  The only thing that  
</span><br>
<span class="quotelev1">&gt; is missing is a bit better scalability on allocating buffers for the  
</span><br>
<span class="quotelev1">&gt; CTS.  Now that all the other changes are in, I'll be working on that  
</span><br>
<span class="quotelev1">&gt; today and tomorrow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="4723.php">Leonardo Fialho: "[OMPI devel] Update orte_proc structure"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/09/4721.php">Ralph Castain: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/09/4718.php">Jeff Squyres: "[OMPI devel] RDMA CM CPC HG ready again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4724.php">Jon Mason: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<li><strong>Reply:</strong> <a href="4724.php">Jon Mason: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
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
