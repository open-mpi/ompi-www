<?
$subject_val = "Re: [OMPI devel] RDMA CM CPC HG ready again";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 20:16:00 2008" -->
<!-- isoreceived="20081002001600" -->
<!-- sent="Wed, 1 Oct 2008 20:15:07 -0400" -->
<!-- isosent="20081002001507" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RDMA CM CPC HG ready again" -->
<!-- id="F1CD4256-4C39-4AA2-8F64-B619AA0D3CD6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081001152122.GB13161_at_opengridcomputing.com" -->
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
<strong>Date:</strong> 2008-10-01 20:15:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4729.php">Ralph Castain: "[OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Previous message:</strong> <a href="4727.php">Leonardo Fialho: "Re: [OMPI devel] Update orte_proc structure"</a>
<li><strong>In reply to:</strong> <a href="4724.php">Jon Mason: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I think we're all good to go now:
<br>
<p>- Brad's problems were initially cluster config errors, and later we  
<br>
determined that they *may* be eHCA gen 1 issues with RDMA CM.  We're  
<br>
deferring fixing them for sure until after v1.3 because IBM doesn't  
<br>
care about RDMA CM for eHCA.
<br>
<p>- Jon's issues *look* like MPI layer issues, not BTL connectivity  
<br>
issues.  And they were spurrious.  So we need to keep testing there.
<br>
<p>However, I'm going to wait merging until after tomorrow's MTT morning  
<br>
results because of the openib BTL breakage from today caused by the  
<br>
ob1 commits yesterday.  I'd like to get a good solid openib MTT test  
<br>
night in before merging in all this new stuff.
<br>
<p><p><p>On Oct 1, 2008, at 11:21 AM, Jon Mason wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Oct 01, 2008 at 08:08:48AM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Per the call yesterday, I'll merge this into the trunk once I get it
</span><br>
<span class="quotelev2">&gt;&gt; working with Brad on PPC.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brad and I discovered a missing htonl/ntohl somewhere in the code  
</span><br>
<span class="quotelev2">&gt;&gt; last
</span><br>
<span class="quotelev2">&gt;&gt; night right before I had to go offline (i.e., we can see the IP
</span><br>
<span class="quotelev2">&gt;&gt; addresses are backwards, but don't know where it's coming from) on  
</span><br>
<span class="quotelev2">&gt;&gt; PPC,
</span><br>
<span class="quotelev2">&gt;&gt; so I haven't finished yet.  We'll probably get it fixed up today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My tests yesterday showed some errors.  Unfortunately, I lost the  
</span><br>
<span class="quotelev1">&gt; system
</span><br>
<span class="quotelev1">&gt; before I could take a look.  I'll re-run them and verify that  
</span><br>
<span class="quotelev1">&gt; everything
</span><br>
<span class="quotelev1">&gt; is still sane.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 30, 2008, at 10:05 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (putting this on devel just so that others can see it)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok, I put in all the things in the RDMA CM CPC HG tree that we've
</span><br>
<span class="quotelev3">&gt;&gt;&gt; talked about and it now should work out of the box with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - any iwarp (no need for kernel hacks to have initiator send first)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - any IB (setup the stuff to do the initiator_depth and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; responder_resources properly)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - any [valid but] bizarre IP addressing scheme
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could everyone try the HG tree again to ensure it still/now works  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you out of the box?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/openib-fd">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/openib-fd</a>-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; progress/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try with changeset 106 (b046bf97deab) or later.  The only thing that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is missing is a bit better scalability on allocating buffers for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CTS.  Now that all the other changes are in, I'll be working on that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; today and tomorrow.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="4729.php">Ralph Castain: "[OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Previous message:</strong> <a href="4727.php">Leonardo Fialho: "Re: [OMPI devel] Update orte_proc structure"</a>
<li><strong>In reply to:</strong> <a href="4724.php">Jon Mason: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
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
