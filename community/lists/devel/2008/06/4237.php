<?
$subject_val = "Re: [OMPI devel] Trunk problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 26 15:31:29 2008" -->
<!-- isoreceived="20080626193129" -->
<!-- sent="Thu, 26 Jun 2008 15:31:20 -0400 (EDT)" -->
<!-- isosent="20080626193120" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk problems" -->
<!-- id="Pine.LNX.4.64.0806261529510.31700_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C800E9A8-A795-45E5-BDA2-9F37DBBFC1D1_at_cisco.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-26 15:31:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4238.php">Caciano Machado: "[OMPI devel] Client connection lost"</a>
<li><strong>Previous message:</strong> <a href="4236.php">Jeff Squyres: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>In reply to:</strong> <a href="4236.php">Jeff Squyres: "Re: [OMPI devel] Trunk problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 26 Jun 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 26, 2008, at 3:08 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the solution I propose. If you think there is any problem with it, 
</span><br>
<span class="quotelev2">&gt;&gt; please let me know asap.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Move the progress function from the BML layer back into the PML. Then the 
</span><br>
<span class="quotelev2">&gt;&gt; PML will have a way to check on it's pending requests, and progress them 
</span><br>
<span class="quotelev2">&gt;&gt; accordingly. This solution offer the same number of function calls as what 
</span><br>
<span class="quotelev2">&gt;&gt; we have today, and should only minimally affect the performances (one more 
</span><br>
<span class="quotelev2">&gt;&gt; if in the progress function).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that this would *not* force a progress function to exist in cm -- which 
</span><br>
<span class="quotelev1">&gt; (IIRC) was one of the reasons that the PML progress function was removed. 
</span><br>
<span class="quotelev1">&gt; The way George described it to me, the pml base would check for != NULL 
</span><br>
<span class="quotelev1">&gt; before registering it.
</span><br>
<p>In that case, why not just have OB1 directly register the function (and 
<br>
not change the PML interface at all)?  The whole BML progress thing only 
<br>
exists because opal_progress wasn't nearly as robust when we started as it 
<br>
is today.  Really, the BML and BTL interfaces shouldn't have progress 
<br>
functions either and should just register directly with opal_progress, but 
<br>
that's a different story for another time.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4238.php">Caciano Machado: "[OMPI devel] Client connection lost"</a>
<li><strong>Previous message:</strong> <a href="4236.php">Jeff Squyres: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>In reply to:</strong> <a href="4236.php">Jeff Squyres: "Re: [OMPI devel] Trunk problems"</a>
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
