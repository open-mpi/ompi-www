<?
$subject_val = "Re: [OMPI devel] openib xrc CPC minor nit";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 21 03:15:16 2007" -->
<!-- isoreceived="20071221081516" -->
<!-- sent="Fri, 21 Dec 2007 10:15:08 +0200" -->
<!-- isosent="20071221081508" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib xrc CPC minor nit" -->
<!-- id="20071221081508.GB25682_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F101A1FF-57C8-46CE-9554-420B2EF5BA23_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib xrc CPC minor nit<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-21 03:15:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2902.php">Tang, Changqing: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<li><strong>Previous message:</strong> <a href="2900.php">George Bosilca: "Re: [OMPI devel] pointer_array"</a>
<li><strong>In reply to:</strong> <a href="2899.php">Jeff Squyres: "[OMPI devel] openib xrc CPC minor nit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2907.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib xrc CPC minor nit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Dec 20, 2007 at 05:39:36PM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Pasha --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I notice in the port info struct that you have a member for the lid,  
</span><br>
<span class="quotelev1">&gt; but only #if HAVE_XRC.  Per a comment in the code, this is supposed to  
</span><br>
<span class="quotelev1">&gt; save bytes when we're using OOB (because we don't need this value in  
</span><br>
<span class="quotelev1">&gt; the OOB CPC).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think we should remove this #if and always have this struct member.   
</span><br>
<span class="quotelev1">&gt; ~4 extra bytes (because it's DSS packed) is no big deal.  It's packed  
</span><br>
<span class="quotelev1">&gt; in with all the other modex info, so the message is already large.  4  
</span><br>
<span class="quotelev1">&gt; more bytes per port won't make a difference (IMHO).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And keep in mind that #if HAVE_XRC is true if XRC is supported -- we  
</span><br>
<span class="quotelev1">&gt; still send the extra bytes if XRC is supported and not used (which is  
</span><br>
<span class="quotelev1">&gt; the default when compiling for OFED 1.3, no?).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I think we should remove those #if's and just always have that data  
</span><br>
<span class="quotelev1">&gt; member there.  It's up to the CPC's if they want to use that info or  
</span><br>
<span class="quotelev1">&gt; not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any objections to me removing this #if on the openib-cpc branch?  (and  
</span><br>
<span class="quotelev1">&gt; eventual merge back up to the trunk)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Remove it, and add a capability mask to port info structure. Capability
<br>
will contain types of CPCs supported by a port. I may need this before
<br>
openib-cpc will be merged back to the trunk.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2902.php">Tang, Changqing: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<li><strong>Previous message:</strong> <a href="2900.php">George Bosilca: "Re: [OMPI devel] pointer_array"</a>
<li><strong>In reply to:</strong> <a href="2899.php">Jeff Squyres: "[OMPI devel] openib xrc CPC minor nit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2907.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib xrc CPC minor nit"</a>
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
