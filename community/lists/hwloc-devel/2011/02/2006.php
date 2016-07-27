<?
$subject_val = "Re: [hwloc-devel] Memory affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 14:02:43 2011" -->
<!-- isoreceived="20110228190243" -->
<!-- sent="Mon, 28 Feb 2011 20:02:37 +0100" -->
<!-- isosent="20110228190237" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Memory affinity" -->
<!-- id="20110228190237.GA5171_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1802614285.248097.1298919267886.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 14:02:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2007.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2005.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="2002.php">Jeff Squyres: "[hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2007.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2007.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Mon 28 Feb 2011 19:54:27 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Feb 28, 2011, at 12:24 PM, Bernd Kallies wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1. I have no reason to doubt this person, but was wondering if someone could confirm this (for Linux).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; set_mempolicy(2) of recent 2.6 kernels says:
</span><br>
<span class="quotelev2">&gt; &gt; Process policy is not remembered if the page is swapped out. When such a
</span><br>
<span class="quotelev2">&gt; &gt; page is paged back in, it will use the policy of the process or memory
</span><br>
<span class="quotelev2">&gt; &gt; range that is in effect at the time the page is allocated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, interesting.  That implies two different scenarios:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. I set a policy, malloc some memory, that memory gets swapped out, I change the policy, then the memory gets swapped back in.  And it now obeys the new policy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. I malloc some memory and set an explicit policy with hwloc_set_area_membind*().  That memory then gets swapped out, and later gets swapped back in.  Since the memory will be the same memory range, it'll keep the same policy as I set with hwloc_set_area_membind(), right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That would seem to imply that I should always hwloc_set_area_membind() if I want it to persist beyond any potential future swapping.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that sound right?
</span><br>
<p>I guess that could be right, but it definitely deserves testing before
<br>
trusting potentially-outdated documentation :)
<br>
<p>I don't remember such kind of document details for other OSes, in any case.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2007.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2005.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="2002.php">Jeff Squyres: "[hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2007.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2007.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
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
