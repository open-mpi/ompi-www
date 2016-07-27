<?
$subject_val = "Re: [hwloc-devel] Memory affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 13:51:24 2011" -->
<!-- isoreceived="20110228185124" -->
<!-- sent="Mon, 28 Feb 2011 13:51:18 -0500" -->
<!-- isosent="20110228185118" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Memory affinity" -->
<!-- id="B5D514A5-86B7-478F-95C1-38527C3D4DCB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1298913884.21890.41.camel_at_kallies" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Memory affinity<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 13:51:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2006.php">Samuel Thibault: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2004.php">Bernd Kallies: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2004.php">Bernd Kallies: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2006.php">Samuel Thibault: "Re: [hwloc-devel] Memory affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 28, 2011, at 12:24 PM, Bernd Kallies wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 1. I have no reason to doubt this person, but was wondering if someone could confirm this (for Linux).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; set_mempolicy(2) of recent 2.6 kernels says:
</span><br>
<span class="quotelev1">&gt; Process policy is not remembered if the page is swapped out. When such a
</span><br>
<span class="quotelev1">&gt; page is paged back in, it will use the policy of the process or memory
</span><br>
<span class="quotelev1">&gt; range that is in effect at the time the page is allocated.
</span><br>
<p>Ah, interesting.  That implies two different scenarios:
<br>
<p>1. I set a policy, malloc some memory, that memory gets swapped out, I change the policy, then the memory gets swapped back in.  And it now obeys the new policy.
<br>
<p>2. I malloc some memory and set an explicit policy with hwloc_set_area_membind*().  That memory then gets swapped out, and later gets swapped back in.  Since the memory will be the same memory range, it'll keep the same policy as I set with hwloc_set_area_membind(), right?
<br>
<p>That would seem to imply that I should always hwloc_set_area_membind() if I want it to persist beyond any potential future swapping.
<br>
<p>Does that sound right?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2006.php">Samuel Thibault: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2004.php">Bernd Kallies: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2004.php">Bernd Kallies: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2006.php">Samuel Thibault: "Re: [hwloc-devel] Memory affinity"</a>
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
