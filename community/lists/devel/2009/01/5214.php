<?
$subject_val = "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 22:57:31 2009" -->
<!-- isoreceived="20090116035731" -->
<!-- sent="Thu, 15 Jan 2009 22:57:24 -0500" -->
<!-- isosent="20090116035724" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()" -->
<!-- id="14C86AC6-ABB5-470B-B7E4-A8BF12007EFA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="496FBA82.8070406_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-15 22:57:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5215.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Previous message:</strong> <a href="5213.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3rc7 has been posted"</a>
<li><strong>In reply to:</strong> <a href="5212.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5210.php">Tim Mattox: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 15, 2009, at 5:36 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Thanks.  For my edification:  are such trivial changes deserving of  
</span><br>
<span class="quotelev1">&gt; RFCs?  Perfect for RFCs?  Good for RFCs while I'm still getting my  
</span><br>
<span class="quotelev1">&gt; feet wet, but unnecessary once I get the hang of things?
</span><br>
<p>I think that once you're comfortable you can omit RFCs for these kinds  
<br>
of small things.
<br>
<p><span class="quotelev1">&gt; 1.4 was poor counting on my part:  1.3+1=1.4.  The new math.  I  
</span><br>
<span class="quotelev1">&gt; guess actually 1.3+1=1.3.1.  I'm fine with 1.3.1.  It's a small,  
</span><br>
<span class="quotelev1">&gt; safe change.  The sooner the better.  But, I'm open to expert opinion.
</span><br>
<p>What I was trying to say (but said poorly) in my previous mail was: if  
<br>
this change is really only code cleanup and has no other effect on the  
<br>
v1.3 series, then just leave it on the trunk and let it go into v1.4.   
<br>
I say this because the v1.3 series is effectively done; there won't be  
<br>
much/any new development on it from here on out.
<br>
<p>If there's a reason to put it into v1.3.1 (e.g., it's in the  
<br>
performance-critical path and the new one is better), then put it in  
<br>
for v1.3.1.
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
<li><strong>Next message:</strong> <a href="5215.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Previous message:</strong> <a href="5213.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3rc7 has been posted"</a>
<li><strong>In reply to:</strong> <a href="5212.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5210.php">Tim Mattox: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
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
