<?
$subject_val = "Re: [OMPI devel] SCTP BTL exclusivity value problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 10:31:54 2007" -->
<!-- isoreceived="20071212153154" -->
<!-- sent="Wed, 12 Dec 2007 10:31:37 -0500" -->
<!-- isosent="20071212153137" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SCTP BTL exclusivity value problem" -->
<!-- id="2B8CC72F-D67A-4E39-89EA-547825317907_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071212150759.GS3360_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SCTP BTL exclusivity value problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 10:31:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2811.php">Gleb Natapov: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>Previous message:</strong> <a href="2809.php">Gleb Natapov: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>In reply to:</strong> <a href="2809.php">Gleb Natapov: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2811.php">Gleb Natapov: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>Reply:</strong> <a href="2811.php">Gleb Natapov: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd be in favor of setting the TCP exclusivity to LOW+100 and setting  
<br>
SCTP exclusivity to LOW.
<br>
<p><p>On Dec 12, 2007, at 10:07 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Dec 12, 2007 at 10:02:07AM -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yes -- this came up in a prior thread.  See what I proposed:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2698.php">http://www.open-mpi.org/community/lists/devel/2007/12/2698.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (no one replied, so no action was taken)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you on a system where the SCTP BTL is being built?  What kind of
</span><br>
<span class="quotelev2">&gt;&gt; environment is it?
</span><br>
<span class="quotelev1">&gt; Red Hat Enterprise Linux AS release 4 (Nahant Update 5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # rpm -qa | grep sctp
</span><br>
<span class="quotelev1">&gt; lksctp-tools-devel-1.0.2-6.4E.1
</span><br>
<span class="quotelev1">&gt; lksctp-tools-doc-1.0.2-6.4E.1
</span><br>
<span class="quotelev1">&gt; lksctp-tools-1.0.2-6.4E.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 12, 2007, at 9:38 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SCTP BTL sets its exclusivity value to MCA_BTL_EXCLUSIVITY_LOW - 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but MCA_BTL_EXCLUSIVITY_LOW is zero so actually it is set to max
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exclusivity possible. Can somebody fix this please? May be we should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; define MCA_BTL_EXCLUSIVITY_LOW to zero?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 			Gleb.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="2811.php">Gleb Natapov: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>Previous message:</strong> <a href="2809.php">Gleb Natapov: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>In reply to:</strong> <a href="2809.php">Gleb Natapov: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2811.php">Gleb Natapov: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>Reply:</strong> <a href="2811.php">Gleb Natapov: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
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
