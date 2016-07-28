<?
$subject_val = "Re: [OMPI devel] RDMA CM CPC HG ready again";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 11:21:26 2008" -->
<!-- isoreceived="20081001152126" -->
<!-- sent="Wed, 1 Oct 2008 10:21:22 -0500" -->
<!-- isosent="20081001152122" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RDMA CM CPC HG ready again" -->
<!-- id="20081001152122.GB13161_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0724234D-2B7B-4C8C-B34B-2034A4966CC5_at_cisco.com" -->
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
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-01 11:21:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4725.php">Ralph Castain: "Re: [OMPI devel] Update orte_proc structure"</a>
<li><strong>Previous message:</strong> <a href="4723.php">Leonardo Fialho: "[OMPI devel] Update orte_proc structure"</a>
<li><strong>In reply to:</strong> <a href="4722.php">Jeff Squyres: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4728.php">Jeff Squyres: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<li><strong>Reply:</strong> <a href="4728.php">Jeff Squyres: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 01, 2008 at 08:08:48AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Per the call yesterday, I'll merge this into the trunk once I get it  
</span><br>
<span class="quotelev1">&gt; working with Brad on PPC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brad and I discovered a missing htonl/ntohl somewhere in the code last  
</span><br>
<span class="quotelev1">&gt; night right before I had to go offline (i.e., we can see the IP  
</span><br>
<span class="quotelev1">&gt; addresses are backwards, but don't know where it's coming from) on PPC, 
</span><br>
<span class="quotelev1">&gt; so I haven't finished yet.  We'll probably get it fixed up today.
</span><br>
<p>My tests yesterday showed some errors.  Unfortunately, I lost the system
<br>
before I could take a look.  I'll re-run them and verify that everything
<br>
is still sane.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 30, 2008, at 10:05 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (putting this on devel just so that others can see it)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, I put in all the things in the RDMA CM CPC HG tree that we've  
</span><br>
<span class="quotelev2">&gt;&gt; talked about and it now should work out of the box with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - any iwarp (no need for kernel hacks to have initiator send first)
</span><br>
<span class="quotelev2">&gt;&gt; - any IB (setup the stuff to do the initiator_depth and  
</span><br>
<span class="quotelev2">&gt;&gt; responder_resources properly)
</span><br>
<span class="quotelev2">&gt;&gt; - any [valid but] bizarre IP addressing scheme
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could everyone try the HG tree again to ensure it still/now works for 
</span><br>
<span class="quotelev2">&gt;&gt; you out of the box?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/openib-fd">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/openib-fd</a>- 
</span><br>
<span class="quotelev2">&gt;&gt; progress/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try with changeset 106 (b046bf97deab) or later.  The only thing that  
</span><br>
<span class="quotelev2">&gt;&gt; is missing is a bit better scalability on allocating buffers for the  
</span><br>
<span class="quotelev2">&gt;&gt; CTS.  Now that all the other changes are in, I'll be working on that  
</span><br>
<span class="quotelev2">&gt;&gt; today and tomorrow.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4725.php">Ralph Castain: "Re: [OMPI devel] Update orte_proc structure"</a>
<li><strong>Previous message:</strong> <a href="4723.php">Leonardo Fialho: "[OMPI devel] Update orte_proc structure"</a>
<li><strong>In reply to:</strong> <a href="4722.php">Jeff Squyres: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4728.php">Jeff Squyres: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<li><strong>Reply:</strong> <a href="4728.php">Jeff Squyres: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
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
