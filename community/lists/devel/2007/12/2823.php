<?
$subject_val = "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 15:22:01 2007" -->
<!-- isoreceived="20071212202201" -->
<!-- sent="Wed, 12 Dec 2007 14:21:57 -0600" -->
<!-- isosent="20071212202157" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's" -->
<!-- id="20071212202156.GB21216_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1E6FE8FE-37CA-4020-BEAE-D02C78AC5B3A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 15:21:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2824.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2822.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2817.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2842.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Dec 12, 2007 at 01:35:33PM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I agree with Gleb's idea.  More below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 12, 2007, at 12:24 PM, Jon Mason wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ok, glad I got this conversation started :)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, we need a slight redesign to determine the cm method (unless  
</span><br>
<span class="quotelev2">&gt; &gt; forced
</span><br>
<span class="quotelev2">&gt; &gt; via commandline arg).  This can be determined by calling all the
</span><br>
<span class="quotelev2">&gt; &gt; individual open routines, and having them return a priority based on
</span><br>
<span class="quotelev2">&gt; &gt; their ability to function.  For example, the xoob open function will
</span><br>
<span class="quotelev2">&gt; &gt; check the mca_btl_openib_component.num_xrc_qps for a non-zero value  
</span><br>
<span class="quotelev2">&gt; &gt; and
</span><br>
<span class="quotelev2">&gt; &gt; return the priority based on that.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Of course, if forced then it will only call that specific open  
</span><br>
<span class="quotelev2">&gt; &gt; function
</span><br>
<span class="quotelev2">&gt; &gt; and throw any relevant errors as necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Close, but I'd do it slightly differently:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - open() is *only* used for creating MCA params.  It's a bad name, but  
</span><br>
<span class="quotelev1">&gt; it's unfortunately the precedent throughout the rest of the OMPI code  
</span><br>
<span class="quotelev1">&gt; base.  :-\ (it has roots in the ompi_info command -- ompi_info has to  
</span><br>
<span class="quotelev1">&gt; be able to get a full list of all MCA params regardless of what  
</span><br>
<span class="quotelev1">&gt; hardware is available on the current system)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - during the openib component startup, we should add a query()  
</span><br>
<span class="quotelev1">&gt; function that does what you describe.  I.e., we query() each endpoint  
</span><br>
<span class="quotelev1">&gt; and it either returns a valid priority or &quot;I don't want to be used  
</span><br>
<span class="quotelev1">&gt; with this endpoint.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - there should be a priority MCA param for every CPC.  Perhaps the CPC  
</span><br>
<span class="quotelev1">&gt; base can handle this...?  I'm not sure; it may need to be down in each  
</span><br>
<span class="quotelev1">&gt; CPC.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - the list of CPCs that want to run with each endpoint are ordered by  
</span><br>
<span class="quotelev1">&gt; priority (ties will be arbitrarily, but deterministically, broken --  
</span><br>
<span class="quotelev1">&gt; alphabetical?) and sent around in the modex.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - when a new connection comes up, the intersection of the CPC lists  
</span><br>
<span class="quotelev1">&gt; for the near and far endpoints is computed and the highest priority  
</span><br>
<span class="quotelev1">&gt; CPC is used to make the connection.  Since everyone has the same data,  
</span><br>
<span class="quotelev1">&gt; both sides will make the same decision.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - CPC init may have to change a bit -- more than one CPC may be used  
</span><br>
<span class="quotelev1">&gt; for a given endpoint because both the local module and the remote  
</span><br>
<span class="quotelev1">&gt; module are involved in making the decision of which CPC is used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After this first cut is done, we should probably also add  
</span><br>
<span class="quotelev1">&gt; btl_openib_cpc_include and btl_openib_cpc_exclude as I described in a  
</span><br>
<span class="quotelev1">&gt; prior mail (just like *_if_include and *_if_exclude in several BTLs)  
</span><br>
<span class="quotelev1">&gt; to include/exclude sets of CPCs at run-time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If this sounds sane, then let me know and I'll start coding it up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This has actually been on my to-do list for too long; if you have the  
</span><br>
<span class="quotelev1">&gt; cycles to do this now, it would be great...
</span><br>
<p>Since I need to have it done before I can do my rdma_cm bits, I'll add
<br>
this to my queue and get started immediately.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll make you a bargain: if you do the stuff above, I'll add in the  
</span><br>
<span class="quotelev1">&gt; configure/build mojo for selectively compiling the XOOB CPC or not  
</span><br>
<span class="quotelev1">&gt; (depending on whether the underlying system has XRC library support or  
</span><br>
<span class="quotelev1">&gt; not).  Cool?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let's go off on a /tmp-public branch for this so we don't hose the  
</span><br>
<span class="quotelev1">&gt; trunk...  I just made /tmp-public/openib-cpc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="2824.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2822.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2817.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2842.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
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
