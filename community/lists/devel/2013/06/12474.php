<?
$subject_val = "Re: [OMPI devel] BTL sendi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 19 13:50:15 2013" -->
<!-- isoreceived="20130619175015" -->
<!-- sent="Wed, 19 Jun 2013 19:50:09 +0200" -->
<!-- isosent="20130619175009" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL sendi" -->
<!-- id="208EC360-918C-480B-8C67-428D57184370_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F68E818_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BTL sendi<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-19 13:50:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12475.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file	parsing"</a>
<li><strong>Previous message:</strong> <a href="12473.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>In reply to:</strong> <a href="12468.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] BTL sendi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Then let me provide a more elaborate answer.
<br>
<p>In the original design of the btl_sendi operation we do not provide an upper limit for the sendi (in the same sense as the eager protocol). Thus, an upper layer (PML in this instance) cannot know if the sendi will succeed or not before the call itself. Thus, in order to avoid several ping-pong between software layers, we force the sendi to either succeed or return a descriptor (up to the BTL eager size), identical to what the btl_alloc would have returned.
<br>
<p>At this point the PML is forced to pack itself the data in the retuned descriptor, without knowing if the BTL is elf can do better (some kind of IN_PLACE). Therefore, this approach make sense in the case where a copy of the data is to be done, aka. the start_copy function. In the case of start_prepare there is no copy of the data as the PML entrust the BTL with the preparation of the optimal descriptor.
<br>
<p>That being said, I would not be against changing the btl_sendi rules slightly. Let's imagine that upon failure to immediately send the data we require from btl_sendi to return a descriptor that instead of being similar to what btl_alloc would return is similar to what btl_prepare_src would return. Such a scenario is possible as both calls have access to the convertor, which is the most critical piece of the data. This will cover the case of the start_prepare and of the start_copy, as will allow us to expand the usages of the btl_sendi capability.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Jun 18, 2013, at 22:52 , &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George replied to me in IM -- posting here for completeness:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, there is a reason. if sendi succeeds, it sends a very small data (at least on the devices that supports it), otherwise it returns a descriptor similar to btl_alloc()
</span><br>
<span class="quotelev2">&gt;&gt; thus you will have to pack the data yourself, and the PML doesn't know if IN_PLACE should be used or not
</span><br>
<span class="quotelev2">&gt;&gt; thus the resulting solution is slower than the default in the spart_prepare case (which is prepare_src + send)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 14, 2013, at 3:46 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In working on the upcoming Cisco USNIC BTL, we noticed that btl.sendi is invoked by OB1 in the non-MCA_BTL_FLAGS_SEND_INPLACE case.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a reason for this?  Or is it only because no one who uses INPLACE has cared about sendi?
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12475.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file	parsing"</a>
<li><strong>Previous message:</strong> <a href="12473.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>In reply to:</strong> <a href="12468.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] BTL sendi"</a>
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
