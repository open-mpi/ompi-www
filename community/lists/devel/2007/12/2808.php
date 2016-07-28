<?
$subject_val = "Re: [OMPI devel] SCTP BTL exclusivity value problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 10:02:22 2007" -->
<!-- isoreceived="20071212150222" -->
<!-- sent="Wed, 12 Dec 2007 10:02:07 -0500" -->
<!-- isosent="20071212150207" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SCTP BTL exclusivity value problem" -->
<!-- id="8E786A87-3106-4812-BECF-834F3EDD9816_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071212143824.GQ3360_at_minantech.com" -->
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
<strong>Date:</strong> 2007-12-12 10:02:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2809.php">Gleb Natapov: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>Previous message:</strong> <a href="2807.php">Gleb Natapov: "[OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>In reply to:</strong> <a href="2807.php">Gleb Natapov: "[OMPI devel] SCTP BTL exclusivity value problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2809.php">Gleb Natapov: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>Reply:</strong> <a href="2809.php">Gleb Natapov: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes -- this came up in a prior thread.  See what I proposed:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2007/12/2698.php">http://www.open-mpi.org/community/lists/devel/2007/12/2698.php</a>
<br>
<p>(no one replied, so no action was taken)
<br>
<p>Are you on a system where the SCTP BTL is being built?  What kind of  
<br>
environment is it?
<br>
<p><p><p>On Dec 12, 2007, at 9:38 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  SCTP BTL sets its exclusivity value to MCA_BTL_EXCLUSIVITY_LOW - 1
</span><br>
<span class="quotelev1">&gt; but MCA_BTL_EXCLUSIVITY_LOW is zero so actually it is set to max
</span><br>
<span class="quotelev1">&gt; exclusivity possible. Can somebody fix this please? May be we should  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; define MCA_BTL_EXCLUSIVITY_LOW to zero?
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
<li><strong>Next message:</strong> <a href="2809.php">Gleb Natapov: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>Previous message:</strong> <a href="2807.php">Gleb Natapov: "[OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>In reply to:</strong> <a href="2807.php">Gleb Natapov: "[OMPI devel] SCTP BTL exclusivity value problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2809.php">Gleb Natapov: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>Reply:</strong> <a href="2809.php">Gleb Natapov: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
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
