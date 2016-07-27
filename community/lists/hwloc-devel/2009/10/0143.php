<?
$subject_val = "Re: [hwloc-devel] release status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  5 09:31:28 2009" -->
<!-- isoreceived="20091005133128" -->
<!-- sent="Mon, 5 Oct 2009 15:31:17 +0200" -->
<!-- isosent="20091005133117" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] release status" -->
<!-- id="20091005133117.GI26609_at_const" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D588FFE3-94C8-4045-B494-D944BA76E06D_at_gmx.ch" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] release status<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-05 09:31:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0144.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0142.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0142.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0145.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0145.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fawzi Mohamed, le Mon 05 Oct 2009 15:23:23 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; well you assume you have a single copy of the whole system structure,  
</span><br>
<span class="quotelev1">&gt; I am not sure that would be the case, and while the memory per core is  
</span><br>
<span class="quotelev1">&gt; growing, the memory per thread is not growing much,... but anyway that  
</span><br>
<span class="quotelev1">&gt; is not the important point...
</span><br>
<p>Threads share the cache levels, so it would be useless to keep a copy
<br>
per thread. A copy per NUMA node should be far enough.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0144.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0142.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0142.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0145.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0145.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
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
