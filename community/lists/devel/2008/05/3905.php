<?
$subject_val = "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 12:51:36 2008" -->
<!-- isoreceived="20080513165136" -->
<!-- sent="Tue, 13 May 2008 12:51:18 -0400" -->
<!-- isosent="20080513165118" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls" -->
<!-- id="023F9702-0BDD-4497-B5A4-22FDA8E6542E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4829C582.8020709_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-13 12:51:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3906.php">Brian W. Barrett: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<li><strong>Previous message:</strong> <a href="3904.php">Don Kerr: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<li><strong>In reply to:</strong> <a href="3904.php">Don Kerr: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3906.php">Brian W. Barrett: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 13, 2008, at 12:44 PM, Don Kerr wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Silly question, but I thought openib ONLY worked in Linux.  If this  
</span><br>
<span class="quotelev2">&gt;&gt; is not the
</span><br>
<span class="quotelev2">&gt;&gt; case, then this whole chunk of code will have to be redesigned (if  
</span><br>
<span class="quotelev2">&gt;&gt; it can
</span><br>
<span class="quotelev2">&gt;&gt; even be done at all).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I thought one of the fundamental architecture principles of Open MPI  
</span><br>
<span class="quotelev1">&gt; was
</span><br>
<span class="quotelev1">&gt; to remain platform neutral.  Anyway, there is a project at Sun to
</span><br>
<span class="quotelev1">&gt; deliver libibverbs for Solaris. Sun intends to move toward utilizing  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; openib btl and phase out support for the udapl btl, at an appropriate
</span><br>
<span class="quotelev1">&gt; pace.  Up until the iwarp specific changes to the openib btl I was  
</span><br>
<span class="quotelev1">&gt; able
</span><br>
<span class="quotelev1">&gt; to build openib btl on Solaris, with development bits of libibverbs.
</span><br>
<p>I agree that this should be a goal -- there's no reason for the openib  
<br>
btl to be Linux-only, especially since we know Solaris is coming into  
<br>
the fold someday soon.
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
<li><strong>Next message:</strong> <a href="3906.php">Brian W. Barrett: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<li><strong>Previous message:</strong> <a href="3904.php">Don Kerr: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<li><strong>In reply to:</strong> <a href="3904.php">Don Kerr: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3906.php">Brian W. Barrett: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
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
