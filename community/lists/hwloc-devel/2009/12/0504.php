<?
$subject_val = "Re: [hwloc-devel] towards PLPA-like API in 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 17:23:00 2009" -->
<!-- isoreceived="20091210222300" -->
<!-- sent="Thu, 10 Dec 2009 23:22:54 +0100" -->
<!-- isosent="20091210222254" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] towards PLPA-like API in 1.0" -->
<!-- id="20091210222254.GS4795_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="6E3187E7-4D48-4820-933C-431521EEE06B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] towards PLPA-like API in 1.0<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 17:22:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0505.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0503.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0503.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0505.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0505.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Thu 10 Dec 2009 16:57:56 -0500, a &#233;crit :
<br>
<span class="quotelev1">&gt; Are you saying that the API will be all OS/physical, with conversion functions from #3 to convert to/from logical?
</span><br>
<p>No, it should stay logical, conversion would be just to translate into OS/physical.
<br>
<p><span class="quotelev1">&gt; Additionally, what exactly is the logical ordering defined to be?
</span><br>
<p>See topology.c, it's always topologically ordered, and then ordered
<br>
by OS cpu numbers. So for instance if the topology is flat, the OS
<br>
CPU numbers would get used. Then the topology distorts the OS CPU
<br>
numbering. So logical ordering is as close as OS CPU numbering as
<br>
possible, constrained by topology.
<br>
<p><span class="quotelev1">&gt; We need to guarantee that it is the same across every run,
</span><br>
<p>It is, unless the BIOS changes the CPU numbers.
<br>
<p><span class="quotelev1">&gt; I see that topology-linux.c uses diropen()
</span><br>
<p>No need to read the OS backends code, the whole sort is achieved in the
<br>
generic topology.c code.
<br>
<p><span class="quotelev1">&gt; My point: if we're going to have a logical ordering, we should be able to provide at least some level of guarantee of stability about that logical ordering.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<p>For sure since that was precisely what I had in my when I put the
<br>
sorting code in the generic part.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0505.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0503.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0503.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0505.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0505.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
