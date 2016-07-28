<?
$subject_val = "Re: [OMPI devel] btl_openib_rnr_retry MCA param";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 13 09:03:48 2008" -->
<!-- isoreceived="20080213140348" -->
<!-- sent="Wed, 13 Feb 2008 09:03:25 -0500" -->
<!-- isosent="20080213140325" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl_openib_rnr_retry MCA param" -->
<!-- id="FD344CAD-FDD5-44F9-AABE-0045C1BBEA06_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080213055947.GA6678_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl_openib_rnr_retry MCA param<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-13 09:03:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3241.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
<li><strong>Previous message:</strong> <a href="3239.php">Jeff Squyres: "[OMPI devel] Newest PLPA"</a>
<li><strong>In reply to:</strong> <a href="3231.php">Gleb Natapov: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3241.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok.  I'll clean up the description of that MCA param to state that it  
<br>
only applies to SRQs.
<br>
<p>Thanks.
<br>
<p><p>On Feb 13, 2008, at 12:59 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Feb 12, 2008 at 05:41:13PM -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I see that in the OOB CPC for the openib BTL, when setting up the  
</span><br>
<span class="quotelev2">&gt;&gt; send
</span><br>
<span class="quotelev2">&gt;&gt; side of the QP, we set the rnr_retry value depending on whether the
</span><br>
<span class="quotelev2">&gt;&gt; remote receive queue is a per-peer or SRQ:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - SRQ: btl_openib_rnr_retry MCA param value
</span><br>
<span class="quotelev2">&gt;&gt; - PP: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The rationale given in a comment is that setting the RNR to 0 is a
</span><br>
<span class="quotelev2">&gt;&gt; good way to find bugs in our flow control.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do we really want this in production builds?  Or do we want 0 for
</span><br>
<span class="quotelev2">&gt;&gt; developer builds and the same btl_openib_rnr_retry value for PP  
</span><br>
<span class="quotelev2">&gt;&gt; queues?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; The comment is mine and IMO it should stay that way for production
</span><br>
<span class="quotelev1">&gt; builds. SW flow control either work or it doesn't and if it doesn't I
</span><br>
<span class="quotelev1">&gt; prefer to know about it immediately. Setting PP to some value greater
</span><br>
<span class="quotelev1">&gt; then 0 just delays the manifestation of the problem and in the case of
</span><br>
<span class="quotelev1">&gt; iWarp such possibility doesn't even exists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
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
<li><strong>Next message:</strong> <a href="3241.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
<li><strong>Previous message:</strong> <a href="3239.php">Jeff Squyres: "[OMPI devel] Newest PLPA"</a>
<li><strong>In reply to:</strong> <a href="3231.php">Gleb Natapov: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3241.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
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
