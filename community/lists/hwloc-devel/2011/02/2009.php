<?
$subject_val = "Re: [hwloc-devel] Memory affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 15:31:46 2011" -->
<!-- isoreceived="20110228203146" -->
<!-- sent="Mon, 28 Feb 2011 21:31:40 +0100" -->
<!-- isosent="20110228203140" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Memory affinity" -->
<!-- id="4D6C062C.8040009_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BA9A391-12C6-4B00-BAFB-C8A2A0541BC5_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 15:31:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2010.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2008.php">Samuel Thibault: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2007.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2010.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2010.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/02/2011 21:18, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Feb 28, 2011, at 2:02 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That would seem to imply that I should always hwloc_set_area_membind() if I want it to persist beyond any potential future swapping.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; I guess that could be right, but it definitely deserves testing before
</span><br>
<span class="quotelev2">&gt;&gt; trusting potentially-outdated documentation :)
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Brice - did you see anything about this when reading the kernel code?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>The kernel only looks at the current virtual memory area policy. If you
<br>
didn't call set_area_membind, the default policy is used. It doesn't
<br>
care about the location of the old page before swap-out. It's similar to
<br>
first-touch: use a local page as long as some pages are available there.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2010.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2008.php">Samuel Thibault: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2007.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2010.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2010.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
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
