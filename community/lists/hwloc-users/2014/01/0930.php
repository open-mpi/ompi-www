<?
$subject_val = "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  6 10:41:43 2014" -->
<!-- isoreceived="20140106154143" -->
<!-- sent="Mon, 6 Jan 2014 16:41:42 +0100" -->
<!-- isosent="20140106154142" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter" -->
<!-- id="20140106154142.GK5592_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="e2d5d6826e3a44fbb42c3ba5826ae970_at_DM2PR08MB512.namprd08.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-06 10:41:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0931.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Previous message:</strong> <a href="0929.php">Eloi Gaudry: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>In reply to:</strong> <a href="0927.php">Eloi Gaudry: "[hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eloi Gaudry, le Mon 06 Jan 2014 16:04:27 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Windows, hwloc_get_cpubind and hwloc_set_cpubind works correctly but I
</span><br>
<span class="quotelev1">&gt; cannot use hwloc_get_proc_cpubind or hwloc_set_proc_cpubind using the current
</span><br>
<span class="quotelev1">&gt; process handle as 2^nd parameter (no matter what the last one is).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any clue on this ?
</span><br>
<p>Not really, it should just work. Do GetProcessAffinityMask() or
<br>
SetProcessAffinityMask() work if you call them the same way?
<br>
<p>Do you perhaps have more than 64 processors&#160;? We still haven't
<br>
found access to such system in order to implement the use of
<br>
Get/SetProcessGroupAffinity.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0931.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Previous message:</strong> <a href="0929.php">Eloi Gaudry: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>In reply to:</strong> <a href="0927.php">Eloi Gaudry: "[hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
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
