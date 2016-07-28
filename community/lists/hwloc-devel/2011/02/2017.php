<?
$subject_val = "Re: [hwloc-devel] multiple simultaneous topology inits?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 16:18:04 2011" -->
<!-- isoreceived="20110228211804" -->
<!-- sent="Mon, 28 Feb 2011 22:17:57 +0100" -->
<!-- isosent="20110228211757" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] multiple simultaneous topology inits?" -->
<!-- id="4D6C1105.9050608_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAC37212-6BF1-46F8-BC39-3F254FA24AD1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] multiple simultaneous topology inits?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 16:17:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2018.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2016.php">Samuel Thibault: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>In reply to:</strong> <a href="2015.php">Jeff Squyres: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/03/2026.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/03/2026.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/02/2011 22:04, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; That being said, someone cited on this list a long time ago that running the hwloc detection on very large machines (e.g., SGI machines with 1000+ cores) takes on the order of seconds (because it traverses /sys, etc.).  So if you want your tool to be used on machines like that, then it might be better to do the discovery once and share that data among your threads.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>People running on such large machines should really export the machine
<br>
topology to XML once and reload from there all the time.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2018.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2016.php">Samuel Thibault: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>In reply to:</strong> <a href="2015.php">Jeff Squyres: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/03/2026.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/03/2026.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
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
