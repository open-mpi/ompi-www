<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 22:46:29 2008" -->
<!-- isoreceived="20080522024629" -->
<!-- sent="Wed, 21 May 2008 22:46:19 -0400" -->
<!-- isosent="20080522024619" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="56D38F43-7B10-41DE-A0CB-D6F75A7B7107_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="796FE0ED-E99C-431A-B7D6-BC2468B88E5D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Linuxes shipping libibverbs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 22:46:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3981.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3979.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3979.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3981.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3981.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3982.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian and I chatted a bit about this off-list, and I think we're in  
<br>
agreement now:
<br>
<p>- do not change the default value or meaning of  
<br>
btl_base_want_component_unsed.
<br>
<p>- major point of confusion: the openib BTL is actually fairly unique  
<br>
in that it can (and does) tell the difference between &quot;there are no  
<br>
devices present&quot; and &quot;there are devices, but something went wrong&quot;.   
<br>
Other BTL's have network interfaces that can't tell the difference and  
<br>
can *only* call the no_nics function, regardless of whether there are  
<br>
no relevant network interfaces or some error occurred during  
<br>
initialization.
<br>
<p>- so a reasonable solution would be an openib-BTL-specific mechanism  
<br>
that doesn't call the no_nics function (to display that  
<br>
btl_base_want_component_unused) if there are no verbs-capable devices  
<br>
found because of the fact that mainline Linuxes are starting to ship  
<br>
libibverbs.  Specific mechanism TBD; likely to be an openib MCA param.
<br>
<p><p>On May 21, 2008, at 9:56 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 21, 2008, at 5:02 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If this is true (for some reason I thought it wasn't), then I think
</span><br>
<span class="quotelev2">&gt;&gt; we'd
</span><br>
<span class="quotelev2">&gt;&gt; actually be ok with your proposal, but you're right, you'd need
</span><br>
<span class="quotelev2">&gt;&gt; something
</span><br>
<span class="quotelev2">&gt;&gt; new in the IB btl.  I'm not concerned about the dual rail issue -- if
</span><br>
<span class="quotelev2">&gt;&gt; you're smart enough to configure dual rail IB, you're smart enough to
</span><br>
<span class="quotelev2">&gt;&gt; figure out OMPI mca params.  I'm not sure the same is true for a
</span><br>
<span class="quotelev2">&gt;&gt; simple
</span><br>
<span class="quotelev2">&gt;&gt; delivered from the white box vendor IB setup that barely works on a
</span><br>
<span class="quotelev2">&gt;&gt; good
</span><br>
<span class="quotelev2">&gt;&gt; day (and unfortunately, there seems to be evidence that these exist).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure I understand what you're saying -- you agree, but what
</span><br>
<span class="quotelev1">&gt; &quot;new&quot; do you think we need in the openib BTL?  The MCA params saying
</span><br>
<span class="quotelev1">&gt; which ports you expect to be ACTIVE?
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3981.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3979.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3979.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3981.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3981.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3982.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
