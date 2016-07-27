<?
$subject_val = "[hwloc-devel] Memory affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 11:51:08 2011" -->
<!-- isoreceived="20110228165108" -->
<!-- sent="Mon, 28 Feb 2011 11:51:03 -0500" -->
<!-- isosent="20110228165103" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Memory affinity" -->
<!-- id="ED4A7FAB-AE55-493C-9824-56504C9F558F_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] Memory affinity<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 11:51:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2003.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2001.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3217)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2003.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2003.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2004.php">Bernd Kallies: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Maybe reply:</strong> <a href="2006.php">Samuel Thibault: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Maybe reply:</strong> <a href="2008.php">Samuel Thibault: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Maybe reply:</strong> <a href="2012.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Maybe reply:</strong> <a href="2024.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Someone just made a fairly disturbing statement to me in an Open MPI bug ticket: if you bind some memory to a particular NUMA node, and that memory later gets paged out, then it loses its memory binding information -- meaning that it can effectively get paged back in at any physical location.  Possibly even on a different NUMA node.  (he said this in the context of the Linux kernel)
<br>
<p>1. I have no reason to doubt this person, but was wondering if someone could confirm this (for Linux).
<br>
<p>2. If it is true for Linux, can it also happen on other OSs?  Or do other OSs track memory binding information when pages are swapped out?
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
<li><strong>Next message:</strong> <a href="2003.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2001.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3217)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2003.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2003.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2004.php">Bernd Kallies: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Maybe reply:</strong> <a href="2006.php">Samuel Thibault: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Maybe reply:</strong> <a href="2008.php">Samuel Thibault: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Maybe reply:</strong> <a href="2012.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Maybe reply:</strong> <a href="2024.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
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
