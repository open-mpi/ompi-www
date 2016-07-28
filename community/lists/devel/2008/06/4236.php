<?
$subject_val = "Re: [OMPI devel] Trunk problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 26 15:27:43 2008" -->
<!-- isoreceived="20080626192743" -->
<!-- sent="Thu, 26 Jun 2008 15:27:36 -0400" -->
<!-- isosent="20080626192736" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk problems" -->
<!-- id="C800E9A8-A795-45E5-BDA2-9F37DBBFC1D1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3F541042-23A8-4FA1-AF38-23FB5BED0DF0_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk problems<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-26 15:27:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4237.php">Brian W. Barrett: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Previous message:</strong> <a href="4235.php">George Bosilca: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>In reply to:</strong> <a href="4235.php">George Bosilca: "Re: [OMPI devel] Trunk problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4237.php">Brian W. Barrett: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Reply:</strong> <a href="4237.php">Brian W. Barrett: "Re: [OMPI devel] Trunk problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 26, 2008, at 3:08 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Here is the solution I propose. If you think there is any problem  
</span><br>
<span class="quotelev1">&gt; with it, please let me know asap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Move the progress function from the BML layer back into the PML.  
</span><br>
<span class="quotelev1">&gt; Then the PML will have a way to check on it's pending requests, and  
</span><br>
<span class="quotelev1">&gt; progress them accordingly. This solution offer the same number of  
</span><br>
<span class="quotelev1">&gt; function calls as what we have today, and should only minimally  
</span><br>
<span class="quotelev1">&gt; affect the performances (one more if in the progress function).
</span><br>
<p><p>Note that this would *not* force a progress function to exist in cm --  
<br>
which (IIRC) was one of the reasons that the PML progress function was  
<br>
removed.  The way George described it to me, the pml base would check  
<br>
for != NULL before registering it.
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
<li><strong>Next message:</strong> <a href="4237.php">Brian W. Barrett: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Previous message:</strong> <a href="4235.php">George Bosilca: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>In reply to:</strong> <a href="4235.php">George Bosilca: "Re: [OMPI devel] Trunk problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4237.php">Brian W. Barrett: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Reply:</strong> <a href="4237.php">Brian W. Barrett: "Re: [OMPI devel] Trunk problems"</a>
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
