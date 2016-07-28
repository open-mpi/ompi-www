<?
$subject_val = "Re: [OMPI devel] [PATCH] openib btl: correct help message error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 10 16:49:22 2007" -->
<!-- isoreceived="20071210214922" -->
<!-- sent="Mon, 10 Dec 2007 15:49:18 -0600" -->
<!-- isosent="20071210214918" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib btl: correct help message error" -->
<!-- id="20071210214918.GA1483_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F5D9858B-DAF5-455B-92FF-1D83775F8379_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] openib btl: correct help message error<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-10 16:49:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2775.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: correct help message error"</a>
<li><strong>Previous message:</strong> <a href="2773.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: correct help message error"</a>
<li><strong>In reply to:</strong> <a href="2773.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: correct help message error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2775.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: correct help message error"</a>
<li><strong>Reply:</strong> <a href="2775.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: correct help message error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Dec 10, 2007 at 04:14:57PM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Cool; thanks.  Go ahead and commit.
</span><br>
<p>Will Do.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW, we work a bit differently here in OMPI as compared to the  
</span><br>
<span class="quotelev1">&gt; OpenFabrics community -- you don't need to mail all patches to the  
</span><br>
<span class="quotelev1">&gt; list before committing (especially for trivial fixes like this :-) ).
</span><br>
<p>Sorry, I was just trying to err on the side of caution and openness.  Do
<br>
you have a rule of thumb for what should be sent on the list versus
<br>
simply committed?
<br>
<p>Thanks,
<br>
Jon
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 10, 2007, at 4:05 PM, Jon Mason wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Slight word usage and grammar error in the openib btl help test.  I
</span><br>
<span class="quotelev2">&gt; &gt; believe the change below is the intended meaning.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Jon
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/btl/openib/help-mpi-btl-openib.txt
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/help-mpi-btl-openib.txt	(revision 16892)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/help-mpi-btl-openib.txt	(working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -164,7 +164,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;   See the InfiniBand spec 1.2 (section 12.7.34) for more details.
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; [no active ports found]
</span><br>
<span class="quotelev2">&gt; &gt; -WARNING: There is at least on IB HCA found on host '%s', but there is
</span><br>
<span class="quotelev2">&gt; &gt; +WARNING: There is at least one IB HCA found on host '%s', but there  
</span><br>
<span class="quotelev2">&gt; &gt; are
</span><br>
<span class="quotelev2">&gt; &gt; no active ports detected. This is most certainly not what you wanted.
</span><br>
<span class="quotelev2">&gt; &gt; Check your cables and SM configuration.
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="2775.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: correct help message error"</a>
<li><strong>Previous message:</strong> <a href="2773.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: correct help message error"</a>
<li><strong>In reply to:</strong> <a href="2773.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: correct help message error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2775.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: correct help message error"</a>
<li><strong>Reply:</strong> <a href="2775.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: correct help message error"</a>
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
