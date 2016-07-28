<?
$subject_val = "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 13:35:43 2007" -->
<!-- isoreceived="20071212183543" -->
<!-- sent="Wed, 12 Dec 2007 13:35:33 -0500" -->
<!-- isosent="20071212183533" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's" -->
<!-- id="1E6FE8FE-37CA-4020-BEAE-D02C78AC5B3A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071212172417.GA21216_at_opengridcomputing.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 13:35:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2818.php">Jeff Squyres: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Previous message:</strong> <a href="2816.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>In reply to:</strong> <a href="2816.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2823.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Reply:</strong> <a href="2823.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree with Gleb's idea.  More below.
<br>
<p>On Dec 12, 2007, at 12:24 PM, Jon Mason wrote:
<br>
<p><span class="quotelev1">&gt; Ok, glad I got this conversation started :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, we need a slight redesign to determine the cm method (unless  
</span><br>
<span class="quotelev1">&gt; forced
</span><br>
<span class="quotelev1">&gt; via commandline arg).  This can be determined by calling all the
</span><br>
<span class="quotelev1">&gt; individual open routines, and having them return a priority based on
</span><br>
<span class="quotelev1">&gt; their ability to function.  For example, the xoob open function will
</span><br>
<span class="quotelev1">&gt; check the mca_btl_openib_component.num_xrc_qps for a non-zero value  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; return the priority based on that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, if forced then it will only call that specific open  
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; and throw any relevant errors as necessary.
</span><br>
<p><p>Close, but I'd do it slightly differently:
<br>
<p>- open() is *only* used for creating MCA params.  It's a bad name, but  
<br>
it's unfortunately the precedent throughout the rest of the OMPI code  
<br>
base.  :-\ (it has roots in the ompi_info command -- ompi_info has to  
<br>
be able to get a full list of all MCA params regardless of what  
<br>
hardware is available on the current system)
<br>
<p>- during the openib component startup, we should add a query()  
<br>
function that does what you describe.  I.e., we query() each endpoint  
<br>
and it either returns a valid priority or &quot;I don't want to be used  
<br>
with this endpoint.&quot;
<br>
<p>- there should be a priority MCA param for every CPC.  Perhaps the CPC  
<br>
base can handle this...?  I'm not sure; it may need to be down in each  
<br>
CPC.
<br>
<p>- the list of CPCs that want to run with each endpoint are ordered by  
<br>
priority (ties will be arbitrarily, but deterministically, broken --  
<br>
alphabetical?) and sent around in the modex.
<br>
<p>- when a new connection comes up, the intersection of the CPC lists  
<br>
for the near and far endpoints is computed and the highest priority  
<br>
CPC is used to make the connection.  Since everyone has the same data,  
<br>
both sides will make the same decision.
<br>
<p>- CPC init may have to change a bit -- more than one CPC may be used  
<br>
for a given endpoint because both the local module and the remote  
<br>
module are involved in making the decision of which CPC is used.
<br>
<p>After this first cut is done, we should probably also add  
<br>
btl_openib_cpc_include and btl_openib_cpc_exclude as I described in a  
<br>
prior mail (just like *_if_include and *_if_exclude in several BTLs)  
<br>
to include/exclude sets of CPCs at run-time.
<br>
<p><span class="quotelev1">&gt; If this sounds sane, then let me know and I'll start coding it up.
</span><br>
<p><p>This has actually been on my to-do list for too long; if you have the  
<br>
cycles to do this now, it would be great...
<br>
<p>I'll make you a bargain: if you do the stuff above, I'll add in the  
<br>
configure/build mojo for selectively compiling the XOOB CPC or not  
<br>
(depending on whether the underlying system has XRC library support or  
<br>
not).  Cool?
<br>
<p>Let's go off on a /tmp-public branch for this so we don't hose the  
<br>
trunk...  I just made /tmp-public/openib-cpc.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2818.php">Jeff Squyres: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Previous message:</strong> <a href="2816.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>In reply to:</strong> <a href="2816.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2823.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Reply:</strong> <a href="2823.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
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
