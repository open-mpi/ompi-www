<?
$subject_val = "Re: [OMPI devel] initial SCTP BTL commit comments?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 07:04:02 2007" -->
<!-- isoreceived="20071213120402" -->
<!-- sent="Thu, 13 Dec 2007 07:03:52 -0500" -->
<!-- isosent="20071213120352" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] initial SCTP BTL commit comments?" -->
<!-- id="3541C1E7-ECD2-4B76-8448-6477BEB0596B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="476007A5.8060008_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] initial SCTP BTL commit comments?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-13 07:03:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2845.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>Previous message:</strong> <a href="2843.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>In reply to:</strong> <a href="2813.php">Andrew Friedley: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 12, 2007, at 11:09 AM, Andrew Friedley wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Either seems fine to me; the ofud method seems a little less elegant
</span><br>
<span class="quotelev2">&gt;&gt; -- was there a reason not to use exclusivity here?  Was it just  
</span><br>
<span class="quotelev2">&gt;&gt; the  fact that TCP's exclusivity is already the lowest possible  
</span><br>
<span class="quotelev2">&gt;&gt; value (0)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry.. try putting my name in the email or something so I know you're
</span><br>
<span class="quotelev1">&gt; asking me.
</span><br>
<p>What, you don't pore over each and every e-mail that is sent to this  
<br>
list?  :-)
<br>
<p><span class="quotelev1">&gt; I think there was but I don't remember right now.  If a low  
</span><br>
<span class="quotelev1">&gt; exclusivity
</span><br>
<span class="quotelev1">&gt; for the UD BTL means it won't get used with the RC BTL, then that's
</span><br>
<span class="quotelev1">&gt; fine.  I don't like that string parsing code anyway.  Suggestions on
</span><br>
<span class="quotelev1">&gt; what to set the exclusivity to?
</span><br>
<p><p>The LOW value is 0.  The TCP BTL now sets itself to LOW+100 (the  
<br>
lowest of the built-in BTLs that is expected to be used by default),  
<br>
and the SCTP BTL now sets itself to LOW.
<br>
<p>So perhaps 0?  (and then remove the string parsing gorp)
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
<li><strong>Next message:</strong> <a href="2845.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>Previous message:</strong> <a href="2843.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>In reply to:</strong> <a href="2813.php">Andrew Friedley: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
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
