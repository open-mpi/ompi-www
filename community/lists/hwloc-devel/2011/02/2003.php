<?
$subject_val = "Re: [hwloc-devel] Memory affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 12:21:49 2011" -->
<!-- isoreceived="20110228172149" -->
<!-- sent="Mon, 28 Feb 2011 18:21:42 +0100" -->
<!-- isosent="20110228172142" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Memory affinity" -->
<!-- id="4D6BD9A6.3020200_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ED4A7FAB-AE55-493C-9824-56504C9F558F_at_cisco.com" -->
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
<strong>Date:</strong> 2011-02-28 12:21:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2004.php">Bernd Kallies: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2002.php">Jeff Squyres: "[hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2002.php">Jeff Squyres: "[hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2004.php">Bernd Kallies: "Re: [hwloc-devel] Memory affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/02/2011 17:51, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Someone just made a fairly disturbing statement to me in an Open MPI bug ticket: if you bind some memory to a particular NUMA node, and that memory later gets paged out, then it loses its memory binding information -- meaning that it can effectively get paged back in at any physical location.  Possibly even on a different NUMA node.  (he said this in the context of the Linux kernel)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I have no reason to doubt this person, but was wondering if someone could confirm this (for Linux).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. If it is true for Linux, can it also happen on other OSs?  Or do other OSs track memory binding information when pages are swapped out?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I don't think that's true. I have read the relevant kernel code quite
<br>
often (and I just checked again in 2.6.18 and latest git), it seems
<br>
&quot;clear&quot; to me that pages are allocated according to the memory
<br>
binding/policy during at least first touch, copy-on-write and swapping-back.
<br>
<p>I think NUMA stuff is well maintained in Linux nowadays. It had bugs in
<br>
the past, but it's so important on today's machines that I don't think
<br>
such an obvious bug would remain unfixed.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2004.php">Bernd Kallies: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2002.php">Jeff Squyres: "[hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2002.php">Jeff Squyres: "[hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2004.php">Bernd Kallies: "Re: [hwloc-devel] Memory affinity"</a>
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
