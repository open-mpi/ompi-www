<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 05:26:50 2008" -->
<!-- isoreceived="20080522092650" -->
<!-- sent="Thu, 22 May 2008 12:26:42 +0300" -->
<!-- isosent="20080522092642" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="48353C52.2010702_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="56D38F43-7B10-41DE-A0CB-D6F75A7B7107_at_cisco.com" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-22 05:26:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3982.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3980.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3980.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3984.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3984.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Brian and I chatted a bit about this off-list, and I think we're in  
</span><br>
<span class="quotelev1">&gt; agreement now:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - do not change the default value or meaning of  
</span><br>
<span class="quotelev1">&gt; btl_base_want_component_unsed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - major point of confusion: the openib BTL is actually fairly unique  
</span><br>
<span class="quotelev1">&gt; in that it can (and does) tell the difference between &quot;there are no  
</span><br>
<span class="quotelev1">&gt; devices present&quot; and &quot;there are devices, but something went wrong&quot;.   
</span><br>
<span class="quotelev1">&gt; Other BTL's have network interfaces that can't tell the difference and  
</span><br>
<span class="quotelev1">&gt; can *only* call the no_nics function, regardless of whether there are  
</span><br>
<span class="quotelev1">&gt; no relevant network interfaces or some error occurred during  
</span><br>
<span class="quotelev1">&gt; initialization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - so a reasonable solution would be an openib-BTL-specific mechanism  
</span><br>
<span class="quotelev1">&gt; that doesn't call the no_nics function (to display that  
</span><br>
<span class="quotelev1">&gt; btl_base_want_component_unused) if there are no verbs-capable devices  
</span><br>
<span class="quotelev1">&gt; found because of the fact that mainline Linuxes are starting to ship  
</span><br>
<span class="quotelev1">&gt; libibverbs.  Specific mechanism TBD; likely to be an openib MCA param.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Ok, we will have own warning mechanism. But we still open question, Will 
<br>
we show (by default) error message in case
<br>
when libibverbs exists but it is no hca in the hca_list ?
<br>
I think we should show the error. The problem of libibverbs default 
<br>
install is relevant only  for
<br>
binary distribution, that install all ompi dependences with ompi 
<br>
package. In this case
<br>
distribution will have openib mca parameter that will allow to disable 
<br>
by default the warning message
<br>
during ompi package install (or build).
<br>
I guess that most people still install ompi from sources. And in this 
<br>
case it sound reasonable for me
<br>
to print this &quot;no hca&quot;  warning it openib btl was build.
<br>
<p>Pasha
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 21, 2008, at 9:56 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; On May 21, 2008, at 5:02 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If this is true (for some reason I thought it wasn't), then I think
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we'd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; actually be ok with your proposal, but you're right, you'd need
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something
</span><br>
<span class="quotelev3">&gt;&gt;&gt; new in the IB btl.  I'm not concerned about the dual rail issue -- if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you're smart enough to configure dual rail IB, you're smart enough to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; figure out OMPI mca params.  I'm not sure the same is true for a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt; delivered from the white box vendor IB setup that barely works on a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; good
</span><br>
<span class="quotelev3">&gt;&gt;&gt; day (and unfortunately, there seems to be evidence that these exist).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I understand what you're saying -- you agree, but what
</span><br>
<span class="quotelev2">&gt;&gt; &quot;new&quot; do you think we need in the openib BTL?  The MCA params saying
</span><br>
<span class="quotelev2">&gt;&gt; which ports you expect to be ACTIVE?
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
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3982.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3980.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3980.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3984.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3984.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
