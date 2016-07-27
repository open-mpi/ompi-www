<?
$subject_val = "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 18:10:56 2010" -->
<!-- isoreceived="20100311231056" -->
<!-- sent="Fri, 12 Mar 2010 00:10:50 +0100" -->
<!-- isosent="20100311231050" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines" -->
<!-- id="20100311231050.GC7174_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B9976C9.1070207_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-11 18:10:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0735.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Previous message:</strong> <a href="0733.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>In reply to:</strong> <a href="0733.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0735.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Fri 12 Mar 2010 00:03:37 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Also, isn't getmntent (without _r) enough here?
</span><br>
<p>I guess it will have troubles if it is called concurrently in different
<br>
threads: the value returned by getmntent is typically not dynamically
<br>
allocated.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0735.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Previous message:</strong> <a href="0733.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>In reply to:</strong> <a href="0733.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0735.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
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
